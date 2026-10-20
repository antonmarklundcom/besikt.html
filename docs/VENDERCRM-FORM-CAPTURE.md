# Complete website enquiry delivery

20 October 2026. One CRM business/site for besiktningsmannen.se. A business phone or WhatsApp connection is not required for website ingestion. Visitor contact validation stays unchanged.

The server handler preserves the full message (the visible form allows 3,000 characters), Swedish phone normalization, service/location/other form answers, page attribution and the original submission identity. Each new enquiry is first saved in a private durable outbox outside public_html. Only a 200/201 JSON receipt with contactId and submissionId marks delivery; HTML/login responses and incomplete JSON remain pending. Separate enquiries from one visitor remain separate. Identical confirmed submissions do not produce another HTTP send.

Keep VENDERCRM_URL and VENDERCRM_API_KEY in the site's ignored server-only config.php, preserving other existing values. Use the CRM base URL without an API path. Optional BESIKT_OUTBOX_DIR is an absolute private directory outside public_html; default is the sibling .besikt-lead-outbox. Existing config.php and logs are excluded from normal release replacement and must be preserved. No key belongs in frontend code, Git, URLs, prompts or reports.

Install the guarded deploy/lead-delivery.php CLI with the runtime. Confirm its exact absolute path in hosting, then run PHP with commands status and check. Configuration checking does not create an enquiry. Arrange retry 20 every five minutes and heartbeat every five minutes after verifying configuration and private permissions. Cron output contains counts/status only. Transient failures keep the original identity/payload and use bounded backoff. Automatic retries hold401/403/422 and invalid receipts for operator review; status reports needs_review. Review/fix the cause and use the reviewed retry flow before releasing those records.

The outbox is new and does not import or replay logs/leads.log. Preserve that legacy ledger. Historical recovery requires a separate reviewed reconciliation; do not replay it automatically. The export-review and retry-reviewed commands support private review of new outbox entries. Do not upload exports to Git, general reports or public hosting.

Before enabling cron, verify an owner-authorized real form submission and the saved CRM business, full message, fields and receipt. Check queue persistence across a normal deployment. Source checks and an installed configuration are separate from a verified public-form receipt.

Rollback restores code while preserving config, old ledger and the private outbox. Pending delivery must be resumed through a compatible version; never delete pending files to fix a release.
