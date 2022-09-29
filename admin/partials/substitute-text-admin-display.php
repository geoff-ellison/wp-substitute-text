<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://geoffreyellison.com/
 * @since      1.0.0
 *
 * @package    Substitute_Text
 * @subpackage Substitute_Text/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<h1>Substitute Text</h1>
<p>&nbsp;</p>
<h2>ABOUT</h2>

<p>
    <b>Substitute Text</b> is a Wordpress plugin that provides a simple shortcode to 
    easily substitute the right text based on a range of conditions, such as the type of device.
</p>

<p>
    For example, if your page is being viewed on a mobile device, you want people to see
    text like "<i>Please tap the button</i>" and if on a desktop it should show "<i>Please click the button</i>".
</p>

<p>&nbsp;</p>
<h2>BASIC USAGE</h2>
<p>
    In your page, add this text:<br>
    <code>Please [substitute_text mobile="tap" desktop="click"] the button</code>
</p>
<p>
    This will produce the desired output, which is:
    <ul>
        <li>
            On a mobile device, people will see:<br>
            <em>Please tap the button</em>
        </li>
        <li>
            On a desktop device, people will see:<br>
            <em>Please click the button</em>
        </li>
    </ul>
</p>