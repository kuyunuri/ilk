<?php
 
 
 $sehirler=array("ankara","k�tahya","konya","izmir","ayd�n","nev�ehir");
 sort($sehirler);
 
 foreach($sehirler as $sehir)  // sehirler dizisini alfabetik listeye g�re s�ralamak i�in
 { 
 echo"$sehir" <br>";
 }
 
 
 
 
 for($sehirler=1;$sehirler<=$sehirler.length;$sehirler ++) // for d�ng�s�ne g�re sehirler dizisini s�ralar
 {
	 echo $sehirler."<br>";
	 
 }
  
  
  
  $sehirler=1;
  while ($sehirler<=$sehirler.length)  // while d�ng�s�ne g�re sehirler dizisini s�ralar
  {
	  echo "$sehirler ";
	  $sehirler ++;
  }
  
 
 
 
  ?>