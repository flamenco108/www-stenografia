<meta content="text/html; charset=utf-8">
<p style="font-family: Courier">

<table>
<tr><td>Sylaba</td><td>Ilość wystąpień</td><td>Procent wystąpień</td></tr>

<?php

set_time_limit(800);
$ile=100;
$ile=$_GET["i"];

//to można skopiować podstawiając inny $plik
$plik = $_GET["f"] . ".txt";
$sylaby = split("[|]",fread(fopen($plik, "r"), filesize($plik))); //TU WYPADA ZWIĘKSZYĆ LICZBĘ MOŻLIWYCH PODZIAŁÓW

foreach($sylaby as $syl)
{
	$liczba[$syl]++;
	$tot++;
}

//tu można walnąć więcej plików


$n=0;

foreach($liczba as $syl => $wart)
{
	$tabelas[$n]=$syl;
	$tabelaw[$n]=$wart;
	//echo "$syl: " . $tabelaw[$n] . "<br>\n";
	$n++;
}

//Tępe sortowanie

for($x = 0; $x < count($tabelaw); $x++) {
  for($y = 0; $y < count($tabelaw); $y++) {
    if($tabelaw[$x] > $tabelaw[$y]) {
      $hold = $tabelas[$x];
      $tabelas[$x] = $tabelas[$y];
      $tabelas[$y] = $hold;
	  
	  $hold = $tabelaw[$x];
	  $tabelaw[$x] = $tabelaw[$y];
      $tabelaw[$y] = $hold;
    }
  }
}

/*foreach($tabelas as $s => $syl)
{
	echo "$syl: " . $tabelaw[$s] . "<br>\n";
}*/

for($i=0; $i<$ile; $i++)
	echo "<tr><td>" . $tabelas[$i] . "</td><td>" . $tabelaw[$i] . "</td><td>" . round($tabelaw[$i]/$tot*100, 4) . "%</td></tr>\n