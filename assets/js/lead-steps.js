/**
 * Splits the homepage quote form (partials/lead-steps.php) into three steps.
 *
 * Without this file the form is one long form that posts normally. With it,
 * one fieldset shows at a time; "Fortsätt" checks only the visible fields, and
 * picking a service moves straight on to step two. Submitting and the inline
 * thank-you stay with assets/js/lead-form.js.
 *
 * Links elsewhere on the page with data-pick-service="<slug>" choose that
 * service and open step two, so a service card can start the form.
 */
(function (document) {
  "use strict";

  document.querySelectorAll("[data-lead-steps]").forEach(function (form) {
    var steps = Array.prototype.slice.call(form.querySelectorAll("[data-step]"));
    var bar = form.querySelector("[data-steps-bar] span");
    var label = form.querySelector("[data-steps-label]");
    var head = form.querySelector("[data-steps-head]");
    var ok = form.querySelector("[data-form-ok]");
    var current = 0;

    form.classList.add("is-stepped");

    function show(index, focus) {
      current = Math.max(0, Math.min(index, steps.length - 1));
      steps.forEach(function (step, n) { step.hidden = n !== current; });
      if (bar) bar.style.width = ((current + 1) / steps.length * 100) + "%";
      if (label) label.textContent = label.dataset.template.replace("%d", current + 1).replace("%d", steps.length);
      if (focus) {
        var field = steps[current].querySelector("input:not([type=radio]):not([type=hidden]), select, textarea");
        if (field) field.focus({ preventScroll: true });
      }
    }

    function valid(step) {
      var fields = step.querySelectorAll("input, select, textarea");
      for (var n = 0; n < fields.length; n++) {
        if (!fields[n].checkValidity()) {
          fields[n].reportValidity();
          return false;
        }
      }
      return true;
    }

    form.addEventListener("click", function (e) {
      if (e.target.closest("[data-step-next]") && valid(steps[current])) {
        show(current + 1, true);
      } else if (e.target.closest("[data-step-back]")) {
        show(current - 1, false);
      }
    });

    form.addEventListener("change", function (e) {
      if (e.target.name === "service" && current === 0) {
        setTimeout(function () { show(1, true); }, 160);
      }
    });

    /* lead-form.js reveals the thank-you; the steps and the counter step aside
       for it, and come back at step one if the visitor starts again. */
    if (ok && "MutationObserver" in window) {
      new MutationObserver(function () {
        var done = !ok.hidden;
        form.classList.toggle("is-done", done);
        if (head) head.hidden = done;
        if (done) {
          steps.forEach(function (step) { step.hidden = true; });
        }
      }).observe(ok, { attributes: true, attributeFilter: ["hidden"] });
    }

    document.querySelectorAll("[data-pick-service]").forEach(function (link) {
      link.addEventListener("click", function () {
        var radio = form.querySelector('input[name=service][value="' + link.dataset.pickService + '"]');
        if (radio) {
          radio.checked = true;
          show(1, false);
        }
      });
    });

    show(0, false);
  });
})(document);
