# Substitute-Text

*Substitute-Text* is a Wordpress plugin that provides a simple shortcode to easily 
substitute the right text based on a range of conditions, such as the type of device.

For example, if your page is being viewed on a mobile device, you want people to 
see text like "_Please tap the button_" and if on a desktop it should show "_Please 
click the button_".

## Basic Usage
In your page content, add this text:
```
Please [substitute_text mobile="tap" desktop="click"] the button
```

This will produce the desired output, which is:

On a mobile device, people will see:<br>
`Please tap the button`

On a desktop device, people will see:<br>
`Please click the button`

## Installation

1. In your Wordpress admin console, got to Plugins > Add New, and there click "Upload Plugin" button.

2. Click the "Choose File" or "Select File" button and navigate to the plugin zip file and select that. This will install the plugin.

3. Alfter Wordpress is done installing, click the "Activate" button.

## Frequently Asked Questions

_Coming soon_

## Changelog

= 1.0 =
* Initial release
