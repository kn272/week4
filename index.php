<?php
  $date =  date('Y-m-d', time());
  echo "The value of \$date: ".$date."<br>";

  $tar = "2017/05/24";
  echo "The value of \$tar: ".$tar."<br>";

  $year = array("2012", "396", "300","2000", "1100", "1089");
  echo "The value of \$year: ";
  print_r($year);

  echo "<br>Replacing '-' with '/': ".strtr($date,"-","/")."<br>";
  $date = strtr($date,"-","/");
  echo "The if elseif statement execution:<br>";
  if (strcmp($date>$tar)>0) {
     echo "The future<br>";
  }
  elseif (strcmp($date>$tar)<0) {
     echo "The past<br>";
  }
  elseif (strcmp($date>$tar)==0) {
     echo "Oops<br>";
  }

  /*
  echo "The value of \$date: ".$date."<br>";
  echo "Finding positions of '/' in date<br>pos:";
  $pos = 0;
  while($pos !== false) {
     $pos = strpos($date,"/",$pos);
     echo " ".$pos." ";
  }*/

  echo "<br>No. of words in ".$date." is: ".str_word_count($date,0)."<br>";

  $sampleText = "This is the sample text for strlen<br>";
  echo "$sampleText"."<br>";
  echo "The length of sampletext is".strlen($sampleText)."<br>";




?>

