<!-- Show all users from team members' website -->
<html>
<head>
  <title>Combined Users</title>
</head>

<body>
  <?php 
    require dirname(__FILE__).'/' . 'config.php';

    // local users
    $url_local = "http://" . LOCAL_HOST_ADDR . "/CoolCompany/api/myusers.php";

    $post_data = array ();

    $cu = curl_init();
    curl_setopt($cu, CURLOPT_URL, $url_local);
    curl_setopt($cu, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($cu, CURLOPT_POST, 1);
    curl_setopt($cu, CURLOPT_POSTFIELDS, $post_data);

    $response_local = curl_exec($cu);
    print "Local Users: </br>";
    print $response_local;
    print "</br>";

    // Nancy's users
    $url_nancy = "http://nx168.xyz/userlist.php";
    curl_setopt($cu, CURLOPT_URL, $url_nancy);
    $response_nancy = curl_exec($cu);
    print "Nancy's Users: </br>";
    print $response_nancy;
    print "</br>";

    // Ruifeng's users


    // Vencci's users

    // Na's users


    curl_close($cu);

  ?>
</body>
</html>
