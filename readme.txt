=== Plugin Name ===
Contributors: jeremyshapiro
Tags: url, query string, url paramaters, urlparam, url params, url param, query, jeremy shapiro, infusion, infusionsoft, purl
Requires at least: 2.0.2
Tested up to: 4.3
Stable tag: 0.3

Short Code to grab any URL Paramater from the Query String

== Description ==

The URL Params WordPress Plugin allows you to access URL parameters in the Query String of the URL.

The plugin even allows you to specify a default value in the shortcode if the parameter isn't set, so if you want to say "Hello, FirstName" and FirstName isn't set, it could say something like "Hello, Friend!"

To specify a backup url paramater, enter multiple paramaters seperated by commas. The plugin will check for each paramter, in order, until a matching one is found and return that. Failing finding any of the paramaters you listed, the default will be returned. For example, you can specify [urlparam param="FirstName, First, name" default="Friend" /] to check for FirstName, and if not found, then First, if not found, then name, and if not, then just return "Friend".

This is great if you have personalized links, like from Infusionsoft, as it lets you personalize a landing page with a persons name.

You can also use this to pre-fill out form fields for folks based on the querystring. For example, if their first name is passed in the URL, your landing page can greet the viewer by name and pre-fill their name on a form.

== Installation ==

To install the plugin, download the zip file and upload via the plugin interface of your WordPress site.

== Usage ==

Use the shortcode urlparam with the optional parameter of "default". For example [urlparam param="FirstName" /] or [urlparam param="FirstName" default="Friend"/].

== Updates ==

0.3: Released 6/25/2011. Added support for alternative paramters, i.e. param="FirstName, First, name"
