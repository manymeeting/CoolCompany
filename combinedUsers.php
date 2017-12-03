<!-- Show all users from team members' website -->
<html>
<head>
  <title>Combined Users</title>
</head>

<body>
  <?php 
    require dirname(__FILE__).'/' . 'config.php';

    // local users
    $url = "http://" . HOST_ADDR . "/CoolCompany/api/myusers.php";

    $post_data = array ();

    $cu = curl_init();
    curl_setopt($cu, CURLOPT_URL, $url);
    curl_setopt($cu, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($cu, CURLOPT_POST, 1);
    curl_setopt($cu, CURLOPT_POSTFIELDS, $post_data);

    $response_local = curl_exec($cu);
    print "Local: </br>";
    print $response_local;
    print "</br>";

    curl_close($cu);

    // Nancy's users
    
  ?>
</body>
</html>
