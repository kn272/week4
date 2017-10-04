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

  echo "$sampleText";
  echo "The length of sampletext is".strlen($sampleText)."<br>";
  
  $ascii = ord($sampleText);
  echo "The ascii value of 1st charecter of sampleText is: ".$ascii."<br>";

  echo "last 2 charecters of DATE are: ".substr($date,-2)."<br>";
  
  echo "After breaking DATE into an array using '/' as
  seperator: <br>";
  print_r(explode("/",$date));
  echo "<br>";

  foreach ($year as $value) {
      switch(($value%4!=0)||(($value%100==0)&&($value%400!=0))) {
         case 1:echo "$value is not a leap year  ";
	        break;
	 case 0:echo "$value is a leap year  ";
	        break;
      }
  }

?>

