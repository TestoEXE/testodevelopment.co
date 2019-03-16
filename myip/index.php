<?php require_once('../require/get.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="IE=Edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Whats my IP address</title>
    <style type="text/css">
      html {
        font-size: 16px;
        line-height: 1.54;
        -webkit-text-size-adjust: 100%;
      }
      body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: #333;
        padding: 15px;
      }
      a {
        color: #0366d6;
        text-decoration: none;
      }
      a:hover {
        text-decoration: underline;
      }
      .container {
        max-width: 600px;
        margin: 0 auto;
      }
      @media (max-width: 600px) {
        html {
          font-size: 14px;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <p>Your IP address is: <?php echo $ip ?> check information <a href="">here</p>
    </div>
  </body>
</html>