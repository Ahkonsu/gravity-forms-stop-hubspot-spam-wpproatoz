=== Gravity Forms Stop HubSpot Spam from WPProAtoZ ===
Contributors: ahkonsu, wpproatoz
Tags: gravityforms, hubspot, spam, antispam, integration
Requires at least: 6.0
Tested up to: 6.7
Requires PHP: 8.0
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Prevents Gravity Forms HubSpot Add-On from sending spam-marked entries to HubSpot, keeping your CRM clean.

== Description ==

This lightweight plugin stops the official Gravity Forms HubSpot Add-On from processing feeds for entries flagged as **spam** (e.g., caught by honeypot, Akismet, reCAPTCHA, or custom filters).

- Uses a targeted filter to skip feed processing when entry status is 'spam'.
- No settings page – just activate and it works.
- Only loads if both Gravity Forms and the HubSpot Add-On are active.
- Ideal for site owners tired of spam contacts polluting their HubSpot CRM.

Perfect as a standalone fix or as the foundation for your broader Gravity Forms enhancements from WPProAtoZ.

== Installation ==

1. Upload the `gravity-forms-stop-hubspot-spam-wpproatoz` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. That's it! Spam-marked entries will no longer be sent to HubSpot via feeds.

No configuration needed.

== Frequently Asked Questions ==

= Does this block spam before it reaches HubSpot? =
Yes – it short-circuits the feed processing step if the Gravity Forms entry status is 'spam'.

= What if I use conditional logic on my feeds? =
This runs independently and adds an extra layer of protection. Spam entries are blocked even if conditional logic would otherwise allow them.

= Will this work with future HubSpot Add-On versions? =
It uses a standard Gravity Forms add-on pattern. If the specific filter changes in a major update, check the changelog or WPProAtoZ site for an updated version.

= Can I expand this plugin later? =
Absolutely! It's designed to be merged into your larger "Gravity Forms Enhanced Tools" collection.

== Changelog ==

= 1.0.0 =
* Initial release: Blocks HubSpot feed processing for spam entries.

== Upgrade Notice ==

= 1.0.0 =
Initial public version.

== Screenshots ==

(none yet – add if you create any later)
