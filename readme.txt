=== Body Class By URL Parameter ===
Contributors: giuse
Stable tag: 0.0.2
Tested up to: 6.4
Requires at least: 4.6
Tags: body class, custom CSS by URL
Requires PHP: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

It adds a CSS class to the body depending on the parameters included in the URL

== Description ==

It adds CSS classes to the body depending on the parameters included in the URL.

For each URL query argument, the plugin adds a CSS class to the body that is composed by [bc]-[paramenter name]-[parameter value].

Where [bc] is the a prefix that is always the same.

If for example you share your page https://your-domain.com/sample-page on Facebook, the user after clicking on the link will land on a page having an URL that looks like https://your-domain.com/sample-page/?fbclid=IwAR0o12nq9Em-x1n

In this case the plugin would add the class bc-fbclid-IwAR0o12nq9Em-x1n to the body.

Then you can use that class for your custom CSS.

`
.bc-fbclid-IwAR0o12nq9Em-x1n .disable-for-facebook{
  display:none !important
}
`

In the example above you hide all the elements that have the class .disable-for-facebook if the users come from the link shared on Facebook.


This is just an example. You can use it to create different styles depending on whatever query arguments are included in the URL.

The use of this plugin requires that you have at least basic CSS skills and you know where to put your custom CSS. All other users will not be able to take advantage of this plugin.

= 0.0.2 =
* Checked WordPress 6.4

= 0.0.1 =
*Initial release
