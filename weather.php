<html>
<head>
  <title>Weather_information</title>
</head>
<body>
  <?php
  $url = "http://api.openweathermap.org/data/2.5/weather?q=Kitakyushu,jp&APPID=";
  $api = "95b417da9bd81fe18e81592860cf798f";
  $json = file_get_contents($url+$api);
  $json = mb_convert_encoding($json,'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
  $arr = json_decode($json,true);
  if ($arr === NULL) {
    return;
  }else{
    $weather_temp = $arr["main"]["temp"];
    $weather_temp_min = $arr["main"]["temp_min"];
    $weather_temp_max = $arr["main"]["temp_max"];
    $weather_id = $arr["weather"][0]["id"];
    $weather_description = $arr["weather"][0]["description"];
    $weather_icon = $arr["weather"][0]["icon"];
    $weather_main = $arr["main"]["temp_min"];
    $weather_lat = $arr["coord"]["lat"];
    $weather_lon = $arr["coord"]["lon"];
    $weather_pressure = $arr["main"]["pressure"];
    $weather_humidity = $arr["main"]["humidity"];
    $weather_speed = $arr["wind"]["speed"];
    $weather_name = $arr["name"];
    $weather_country = $arr["sys"]["country"];
    $weather_sunrise = $arr["sys"]["sunrise"];
    $weather_sunset = $arr["sys"]["sunset"];
    echo('<p>'.$weather_temp.'<br>');
    echo($weather_temp_min.'<br>');
    echo($weather_temp_max.'<br>');
    echo($weather_id.'<br>');
    echo($weather_description.'<br>');
    echo($weather_icon.'<br>');
    echo($weather_main.'<br>');
    echo($weather_lat.'<br>');
    echo($weather_lon.'<br>');
    echo($weather_pressure.'<br>');
    echo($weather_humidity.'<br>');
    echo($weather_speed.'<br>');
    echo($weather_name.'<br>');
    echo($weather_country.'<br>');
    echo($weather_sunrise.'<br>');
    echo($weather_sunset.'</p>');
  }
  ?>

</body>
</html>
