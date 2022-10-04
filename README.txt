=== Plugin Name ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: https://geoffreyellison.com/
Tags: comments, spam
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Substitute-Text is a Wordpress plugin for easily substituting the right text based on a range of conditions, such as the type of device.

== Description ==

Substitute-Text

*Substitute-Text* is a Wordpress plugin that provides a simple shortcode to easily 
substitute the right text based on a range of conditions, such as the type of device.

For example, if your page is being viewed on a mobile device, you want people to 
see text like "_Please tap the button_" and if on a desktop it should show "_Please 
click the button_".

BASIC USAGE
In your page content, add this text:
```
Please [substitute_text mobile="tap" desktop="click"] the button
```

This will produce the desired output, which is:

On a mobile device, people will see:<br>
_Please tap the button_

On a desktop device, people will see:<br>
_Please click the button_

== Installation ==

1. In your Wordpress admin console, got to Plugins > Add New, and there click "Upload Plugin" button.

2. Click the "Choose File" or "Select File" button and navigate to the plugin zip file and select that. This will install the plugin.

3. Alfter Wordpress is done installing, click the "Activate" button.

== Frequently Asked Questions ==

= A question that someone might have =

An answer to that question.

= What about foo bar? =

Answer to foo bar dilemma.

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png`
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 1.0 =
* A change since the previous version.
* Another change.

= 0.5 =
* List versions from most recent at top to oldest at bottom.

== Upgrade Notice ==

= 1.0 =
Upgrade notices describe the reason a user should upgrade.  No more than 300 characters.

= 0.5 =
This version fixes a security related bug.  Upgrade immediately.

== Arbitrary section ==

You may provide arbitrary sections, in the same format as the ones above.  This may be of use for extremely complicated
plugins where more information needs to be conveyed that doesn't fit into the categories of "description" or
"installation."  Arbitrary sections will be shown below the built-in sections outlined above.

== A brief Markdown Example ==

Ordered list:

1. Some feature
1. Another feature
1. Something else about the plugin

Unordered list:

* something
* something else
* third thing

Here's a link to [WordPress](http://wordpress.org/ "Your favorite software") and one to [Markdown's Syntax Documentation][markdown syntax].
Titles are optional, naturally.

[markdown syntax]: http://daringfireball.net/projects/markdown/syntax
            "Markdown is what the parser uses to process much of the readme file"

Markdown uses email style notation for blockquotes and I've been told:
> Asterisks for *emphasis*. Double it up  for **strong**.

`<?php code(); // goes in backticks ?>`