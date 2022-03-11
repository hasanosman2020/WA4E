<html>
  <head>
    <title>Set Date & Time</title>
  </head>
  <body>
    <?php date_default_timezone_set('London');
//set time and date in non-OO
$nextweek = time() + (7*24*60*60);
echo 'Now: '.date('d-m-Y')."\n";
echo 'Next week: '.date('d-m-Y', $nextweek)."\n";

echo ("=====\n");

//set date and time using objecct-oriented programming
$now = new DateTime();
$nextweek = new DateTime('today +1 week');
echo 'Now: '.$now->format('Y-m-d')."\n";
echo 'Next week: '.$nextweek->format('Y-m-d')."\n";


?> 
  </body>
</html>