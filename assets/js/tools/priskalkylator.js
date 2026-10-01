/**
 * Priskalkylatorn på /priser/kalkylator/. Reglerna (grundpriser, boyta-faktorer,
 * tillägg) kommer som JSON i data-rules från content/tools.php och
 * content/precios.php – inga egna siffror här. Visar alltid ett intervall.
 */
(function (window, document) {
  "use strict";

  var root = document.querySelector('[data-tool="priskalkylator"]');
  if (!root) {
    return;
  }

  var rules;
  try {
    rules = JSON.parse(root.getAttribute("data-rules") || "{}");
  } catch (e) {
    return;
  }

  var shared = window.ToolsShared || {};
  var money = (window.Market && window.Market.fmtMoney) || function (n) { return n + " kr"; };
  var form = root.querySelector("[data-calc-form]");
  var result = root.querySelector("[data-result]");
  var valueEl = root.querySelector("[data-result-value]");
  var linesEl = root.querySelector("[data-result-lines]");
  var noteEl = root.querySelector("[data-result-note]");
  var sizeField = root.querySelector("[data-size-field]");
  var addonFields = root.querySelectorAll("[data-addon]");
  var leadForm = root.querySelector("form[data-lead-form]");
  var useBtn = root.querySelector("[data-use-result]");
  var restartBtn = root.querySelector("[data-restart]");

  var NEED_BY_SERVICE = {
    overlatelsebesiktning: "kop",
    statusbesiktning: "kop",
    badrumsbesiktning: "badrum",
    fuktutredning: "fukt",
    slutbesiktning: "renovering",
    brf: "brf"
  };

  var calculated = false;
  var last = null;

  function roundTo(n) {
    var step = rules.round || 100;
    return Math.round(n / step) * step;
  }

  function addonApplies(addon, service) {
    return (addon.appliesTo || []).indexOf(service) !== -1;
  }

  function syncFields() {
    var serviceKey = form.elements.service.value;
    var def = rules.services[serviceKey];
    sizeField.hidden = !(def && def.size);
    Array.prototype.forEach.call(addonFields, function (el) {
      var addon = rules.addons[el.getAttribute("data-addon")];
      el.hidden = !addonApplies(addon, serviceKey);
    });
  }

  function compute() {
    var serviceKey = form.elements.service.value;
    var def = rules.services[serviceKey];
    var base = def.price;
    var lines = [];
    var low;
    var high;
    var quote = false;

    lines.push(["Grundpris (från)", money(base)]);

    if (def.size) {
      var size = rules.sizes[parseInt(form.elements.size.value, 10)] || rules.sizes[0];
      if (size.quote) {
        quote = true;
      } else {
        low = base * size.low;
        high = base * size.high;
        lines.push(["Boyta " + size.label, "× " + size.low.toFixed(2).replace(".", ",") + "–" + size.high.toFixed(2).replace(".", ",")]);
      }
    } else {
      low = base * def.band[0];
      high = base * def.band[1];
    }

    var summary = [def.label];
    if (def.size) {
      summary.push(rules.sizes[parseInt(form.elements.size.value, 10)].label);
    }

    if (!quote) {
      if (form.elements.moisture.value === "1" && addonApplies(rules.addons.moisture, serviceKey)) {
        low += rules.addons.moisture.low;
        high += rules.addons.moisture.high;
        lines.push(["Fuktmätning i hela huset", "+ " + money(rules.addons.moisture.low) + "–" + money(rules.addons.moisture.high)]);
        summary.push("med fuktmätning");
      }
      var extra = parseInt(form.elements.bathroom.value, 10) || 0;
      if (extra > 0 && addonApplies(rules.addons.bathroom, serviceKey)) {
        low += rules.addons.bathroom.low * extra;
        high += rules.addons.bathroom.high * extra;
        lines.push(["Extra badrum × " + extra, "+ " + money(rules.addons.bathroom.low * extra) + "–" + money(rules.addons.bathroom.high * extra)]);
        summary.push(extra + " extra badrum");
      }
      low = roundTo(low);
      high = roundTo(high);
    }

    var outside = form.elements.outside.value === "1";
    if (outside) {
      summary.push("utanför Stockholms län");
    }

    var text;
    if (quote) {
      text = "Enligt offert";
      summary.push("pris enligt offert");
    } else {
      text = money(low) + " – " + money(high);
      summary.push("kalkylator: " + money(low) + " – " + money(high));
    }

    return {
      service: serviceKey,
      value: text,
      lines: lines,
      note: (quote ? "Över 300 m² prissätts efter omfattning. " : "") +
        (outside ? rules.outside + " " : "") + "Slutligt pris i offerten.",
      summary: summary.join(", ")
    };
  }

  function render() {
    last = compute();
    valueEl.textContent = last.value;
    linesEl.textContent = "";
    last.lines.forEach(function (line) {
      var dt = document.createElement("dt");
      var dd = document.createElement("dd");
      dt.textContent = line[0];
      dd.textContent = line[1];
      linesEl.appendChild(dt);
      linesEl.appendChild(dd);
    });
    noteEl.textContent = last.note;
    result.hidden = false;
    calculated = true;
  }

  form.addEventListener("submit", function (event) {
    event.preventDefault();
    render();
    if (shared.trackToolUsed) {
      shared.trackToolUsed("priskalkylator", { service: last.service });
    }
  });

  form.addEventListener("change", function (event) {
    if (event.target && event.target.name === "service") {
      syncFields();
    }
    if (calculated) {
      render();
    }
  });

  if (useBtn) {
    useBtn.addEventListener("click", function () {
      if (!last || !shared.prefillLeadForm) {
        return;
      }
      shared.prefillLeadForm(leadForm, {
        need: NEED_BY_SERVICE[last.service] || "kop",
        message: "Jag har räknat i priskalkylatorn: " + last.summary + ".",
        result: last.summary,
        service: last.service
      });
      if (shared.focusLeadForm) {
        shared.focusLeadForm(leadForm);
      }
    });
  }

  if (restartBtn) {
    restartBtn.addEventListener("click", function () {
      form.reset();
      syncFields();
      result.hidden = true;
      calculated = false;
      last = null;
    });
  }

  syncFields();
})(window, document);
