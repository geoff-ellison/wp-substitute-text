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
    It can also insert dynamic text, such as dates and times.
</p>

<p>
    For example, if your page is being viewed on a mobile device, you want people to see
    text like "<i>Please tap the button</i>" and if on a desktop it should show "<i>Please click the button</i>".
</p>

<p>&nbsp;</p>
<h2>SUBSTITUTE TEXT BASED ON USER'S DEVICE</h2>
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

<p>&nbsp;</p>
<h2>INSERT TEXT</h2>
<p>
    <h3>Example: Insert The Year</h3>
    In your page, add this text:<br>
    <code>We are currently in [substitute_text insert="year" ].</code>
</p>
<p>
    This will produce this output in your page:
<ul>
    <li>
        <em>We are currently in 2022</em>
    </li>
</ul>
</p>
<p>
    <h3>Date Insertion Reference</h3>
    In the examples, assume the current date is 5 September 2022.<br><br>
    Set the "insert" attribute to one of the following:
</p>
<table border="1" cellspacing="0" cellpadding="4">
    <tr>
        <th>"insert" Attribute</th>
        <th>What it Does</th>
        <th>Usage</th>
        <th>Output Example</th>
    </tr>
    <tr>
        <td>year</td>
        <td>inserts the current year</td>
        <td><code>[substitute_text insert="year"]</code></td>
        <td>2022</td>
    </tr>
    <tr>
        <td>month</td>
        <td>inserts the current month name in full</td>
        <td><code>[substitute_text insert="month"]</code></td>
        <td>September</td>
    </tr>
    <tr>
        <td>month-abbr</td>
        <td>inserts the current month name in 3-letter form</td>
        <td><code>[substitute_text insert="month-abbr"]</code></td>
        <td>Sep</td>
    </tr>
    <tr>
        <td>month-num</td>
        <td>inserts the current month number with leading zeros</td>
        <td><code>[substitute_text insert="month-num"]</code></td>
        <td>09</td>
    </tr>
    <tr>
        <td>date-format</td>
        <td>inserts the current date in the given <a target="_blank" href="https://www.php.net/manual/en/datetime.format.php">format</a></td>
        <td><code>[substitute_text insert="date-format" format="Y-M-d"]</code></td>
        <td>2022-Sep-05</td>
    </tr>
</table>
