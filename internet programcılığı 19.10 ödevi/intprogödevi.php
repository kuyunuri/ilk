<?php
 
 
 $sehirler=array("ankara","kutahya","konya","izmir","aydin","nevsehir");
 sort($sehirler);
 
 foreach($sehirler as $sehir)  // sehirler dizisini alfabetik listeye göre sýralamak için
 { 
 echo $sehir ;
 echo "<br />";
 }
 
 
 
 
 for($i=0;$i<count($sehirler);$i ++) // for döngüsüne göre sehirler dizisini sýralar
 {
	 echo $sehirler[$i]."<br>";
	 
 }
  
  
  
  $i=0;
  while ($i<count($sehirler))  // while döngüsüne göre sehirler dizisini sýralar
  {
	  echo $sehirler[$i++];
	  echo "<br />";
  }
  
 
 
 
  ?>