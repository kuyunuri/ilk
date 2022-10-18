<?php
 
 
 $sehirler=array("ankara","kütahya","konya","izmir","aydýn","nevþehir");
 sort($sehirler);
 
 foreach($sehirler as $sehir)  // sehirler dizisini alfabetik listeye göre sýralamak için
 { 
 echo"$sehir" <br>";
 }
 
 
 
 
 for($sehirler=1;$sehirler<=$sehirler.length;$sehirler ++) // for döngüsüne göre sehirler dizisini sýralar
 {
	 echo $sehirler."<br>";
	 
 }
  
  
  
  $sehirler=1;
  while ($sehirler<=$sehirler.length)  // while döngüsüne göre sehirler dizisini sýralar
  {
	  echo "$sehirler ";
	  $sehirler ++;
  }
  
 
 
 
  ?>