<?php
$config = require('config.php');
?>
<html>
  <head>
    <title>reCAPTCHA demo</title>
    <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '<?php echo $config['client-key']; ?>'
        });
      };
    </script>
  </head>
  <body>
    <form action="admin.php" method="POST">
      <div id="html_element"></div>
      <br>
      <input type="submit" value="Submit">
    </form>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
  </body>
</html>