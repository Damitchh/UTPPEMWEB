<?php
  $myFile = "testFile2.txt";
  $fh = fopen($myFile, 'a') or die("can't open file");
  $stringData = "New Stuff 1\n";
  fwrite($fh, $stringData);
  $stringData = "New Stuff 2\n";
  fwrite($fh, $stringData);
  $theData =file_get_contents($myFile);
  fclose($fh);
  echo $theData;
?>
