<?php
if(!isset($code))
    $code = false;
?>
<?php echo BsHtml::alert(BsHtml::ALERT_COLOR_DANGER, "Sorry, it seems like a(n)  error has occured during your request."); ?>
<?php echo BsHtml::alert(BsHtml::ALERT_COLOR_INFO, "<strong>Message:</strong> Lorem Ipsum Dolor"); ?>
<?php echo BsHtml::alert(BsHtml::ALERT_COLOR_DEFAULT, "<strong>Message:</strong> Lorem Ipsum Dolor"); ?>
<?php echo BsHtml::alert(BsHtml::ALERT_COLOR_WARNING, "<strong>Message:</strong> Lorem Ipsum Dolor"); ?>
<?php echo BsHtml::alert(BsHtml::ALERT_COLOR_SUCCESS, "<strong>Message:</strong> Lorem Ipsum Dolor"); ?>
<?php if($code) :?>
    <pre class="pre-scrollable hidden-sm hidden-xs  linenums prettyprint lang-py prettyprint lang-py">
         &lt;?php echo BsHtml::alert(BsHtml::ALERT_COLOR_DANGER, "Sorry, it seems like a(n)  error has occured during your request."); ?&gt;
         &lt;?php echo BsHtml::alert(BsHtml::ALERT_COLOR_INFO, "&lt;strong&gt;Message:&lt;/strong&gt; Lorem Ipsum Dolor"); ?&gt;
         &lt;?php echo BsHtml::alert(BsHtml::ALERT_COLOR_DEFAULT, "&lt;strong&gt;Message:&lt;/strong&gt; Lorem Ipsum Dolor"); ?&gt;
         &lt;?php echo BsHtml::alert(BsHtml::ALERT_COLOR_WARNING, "&lt;strong&gt;Message:&lt;/strong&gt; Lorem Ipsum Dolor"); ?&gt;
         &lt;?php echo BsHtml::alert(BsHtml::ALERT_COLOR_SUCCESS, "&lt;strong&gt;Message:&lt;/strong&gt; Lorem Ipsum Dolor"); ?&gt;
    </pre>
<?php endif; ?>