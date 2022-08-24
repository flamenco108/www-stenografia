<meta content="text/html; charset=utf-8">
<p style="font-family: Courier">

<?php

$szukany = $_GET["sz"];
$plik = $_GET["f"]; //musi być CZYSTY plik
$tekst = fread(fopen($plik, "r"), filesize($plik));

$dlsz=strlen($szukany);

while(true)
{
	$poz = strpos($tekst, $szukany);
	if($poz !== false)
	{
		$przed[$tekst[$poz-1]]++;
		$po[$tekst[$poz+$dlsz]]++;
		$wyst++;
		$tekst = substr($tekst, $poz+1);
	}
	else break;
}

$lprzed=0; //licznik przed
$lpo=0; //licznik po

//TUTAJ PRZED
foreach($przed as $cop => $wart)
{
	if($cop==" ") $cop="INI";
	$przedco[$lprzed]=$cop;
	$przedil[$lprzed]=$wart;
	$lprzed++;
}

//Tępe sortowanie

for($x = 0; $x < count($przedil); $x++) {
  for($y = 0; $y < count($przedil); $y++) {
    if($przedil[$x] > $przedil[$y]) {
      $hold = $przedco[$x];
      $przedco[$x] = $przedco[$y];
      $przedco[$y] = $hold;
	  
	  $hold = $przedil[$x];
	  $przedil[$x] = $przedil[$y];
      $przedil[$y] = $hold;
    }
  }
}

//TUTAJ PO

foreach($po as $cop => $wart)
{
	if($cop==" ") $cop="FIN";
	$poco[$lpo]=$cop;
	$poil[$lpo]=$wart;
	$lpo++;
}

//Tępe sortowanie

for($x = 0; $x < count($poil); $x++) {
  for($y = 0; $y < count($poil); $y++) {
    if($poil[$x] > $poil[$y]) {
      $hold = $poco[$x];
      $poco[$x] = $poco[$y];
      $poco[$y] = $hold;
	  
	  $hold = $poil[$x];
	  $poil[$x] = $poil[$y];
      $poil[$y] = $hold;
    }
  }
}

echo "<b>Znaki przed $szukany</b></br><table>
<tr><td>Fonem </td><td>Ilość wystąpień </td><td>Procent wystąpień</td></tr>\n";

foreach($przedco as $k => $co)
	echo "<tr><td>" . $co . "</td><td>" . $przedil[$k] . "</td><td>" . round($przedil[$k]/$wyst*100, 4) . "%</td></tr>\n";
	
echo "</table><br><br>\n";

echo "<b>Znaki po $szukany</b><table>
<tr><td>Fonem </td><td>Ilość wystąpień </td><td>Procent wystąpień</td></tr>\n";

foreach($poco as $k => $co)
	echo "<tr><td>" . $co . "</td><td>" . $poil[$k] . "</td><td>" . round($poil[$k]/$wyst*100, 4) . "%</td></tr>\n";
	
echo "</table