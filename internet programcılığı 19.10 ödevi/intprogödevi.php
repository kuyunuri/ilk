<?php
 
 
 $sehirler=array("ankara","kutahya","konya","izmir","aydin","nevsehir");
 sort($sehirler);
 
 foreach($sehirler as $sehir)  // sehirler dizisini alfabetik listeye g�re s�ralamak i�in
 { 
 echo $sehir ;
 echo "<br />";
 }
 
 
 
 
 for($i=0;$i<count($sehirler);$i ++) // for d�ng�s�ne g�re sehirler dizisini s�ralar
 {
	 echo $sehirler[$i]."<br>";
	 
 }
  
  
  
  $i=0;
  while ($i<count($sehirler))  // while d�ng�s�ne g�re sehirler dizisini s�ralar
  {
	  echo $sehirler[$i++];
	  echo "<br />";
  }
  
 
 
 
  ?>