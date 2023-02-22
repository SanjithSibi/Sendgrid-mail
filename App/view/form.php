<?
namespace Sgm\App\view;
defined('ABSPATH') or die();
    ?>
    <div id="contact-form">
        <form action="" id="mail" method="post">
            <h1>Sendgrid Mail</h1>
            To Address:<br>
            <input type="email" name="to" id="to" placeholder="To address" required><br>
            Subject:<br>
            <input type="text" name="subject" id="subject" placeholder="Subject" required><br>
            Body:<br>
            <textarea name="message" id="body" placeholder="Your Message" required></textarea><br><br>
            <input type="button" id="submit" value="Submit">
        </form>

    </div>
    <?php
?>








