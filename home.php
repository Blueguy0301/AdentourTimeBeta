<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
</head>
<body>
  <!-- checker for mobile or desktop use. don't touch any further. thank you -->
  <?php
    //mobile or desktop device.
    $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
    $ifMob = is_numeric(strpos($ua, "mobile"));
    //browser checker
    $arr_browsers = ["Opera", "Edg", "Chrome", "Safari", "Firefox", "MSIE", "Trident"];
    $agent = $_SERVER['HTTP_USER_AGENT'];
    $user_browser = '';
    foreach ($arr_browsers as $browser) {
        if (strpos($agent, $browser) !== false) {
            $user_browser = $browser;
            break;
        }   
    } 
    switch ($user_browser) {
      case 'MSIE':
      $user_browser = 'Internet Explorer';
      break;
      case 'Trident':
        $user_browser = 'Internet Explorer';
        break;
      case 'Edg':
        $user_browser = 'Microsoft Edge';
        break;
    }
  ?>
  <script>
    var platform = '<?php echo $ifMob ?>' + 'mobile';
    var browser = '<?php echo $user_browser;?>' ;
    browser = browser.toLowerCase();
    if(platform == '1mobile'){
      window.location.replace("./Mobile/login.html");
    } else{
      switch(browser){
        case 'msie':
          //Internet explorer webpage
          break;
        case 'trident':
          //IE ??
            break;
        case 'edg':
          //MS EDGE  
          break;
        case 'chrome':
                window.location.replace("./desktopmode/login.php");
                break;
                default:
                window.location.replace("./desktopmode/login.php");
                  break;
                }
      }
  </script>
</body>
</html>