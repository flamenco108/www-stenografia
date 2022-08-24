<meta content="text/html; charset=utf-8">

<?php

function dziel($wrz)
	{
	
		$spolgl = array("b","c","ć","č","d","f","g","h","j","k","l","ł","m","n","ń","p","r","s","ś","š","t","w","z","ż","ź", "ď", "đ", "ç");
		$samogl = array("a","ą","e","ę","o","ó","u","y"); //"i" traktujemy osobno
	
		$wzor = str_replace($spolgl, "B", $wrz);
		$wzor = str_replace($samogl, "A", $wzor);
		$wzor = str_replace("i", "I", $wzor);
		$wyraz = preg_split('//', $wzor, -1);
	
		$dl = count($wyraz);
		
		//echo $dl . "\n<br>";
		
		$nowy = "";
		$n=0;
		$p=0;
		$switch="0";
		while($n<$dl-1)
		{
			if($wyraz[$n]=="A" || $wyraz[$n]=="I" )
			{
				if($switch=="A")
				{
					$nowy .= substr($wrz, $p, $n-$p-1) . "|";
					$p=$n-1;
					$switch="A";
				}
				else if($switch=="AB")
				{
					$nowy .= substr($wrz, $p, $n-$p-2) . "|";
					$p=$n-2;
					$switch=$wyraz[$n];
				}
				else if($switch=="ABB")
				{
					$nowy .= substr($wrz, $p, $k-$p-1) . "|";
					$p=$k-1;
					$switch=$wyraz[$n];
				}
				else $switch=$wyraz[$n];
			}
			else
			{
				if($switch=="A" || $switch=="I")
					$switch="AB";
				else if($switch=="AB")
				{
					$switch="ABB";
					$k=$n;
				}
			}
			
			//echo "$n " . $wrz[$n] . "; status:" . $switch . "; P: $p; K:$k<br>\n";
			$n++;
		}
		$nowy .= substr($wrz, $p, $dl-$p);
		return $nowy;
		
		//echo $wyr . "<br>\n";
		//echo $wzor . "<br>\n";
	}
	
	//Koniec definicji


$plik = $_GET["f"] . ".txt";

//tablice glosek
$spolgl = array("b","c","ć","č","d","f","g","h","j","k","l","ł","m","n","ń","p","r","s","ś","#","t","w","z","ż","ź", "ď", "đ", "ç");
$samogl = array("a","ą","e","ę","o","ó","u","y"); //"i" traktujemy osobno
//

$tekst = strtolower(fread(fopen($plik, "r"), filesize($plik)));
$tekst = str_replace("au", "ał", $tekst);

$tekst = str_replace("cz", "č", $tekst); // znak dla CZ
$tekst = str_replace("sz", "#", $tekst); //znak dla SZ

$tekst = str_replace("ni ", "ńi ", $tekst);
//$tekst = str_replace("ni", "ń", $tekst);

$tekst = str_replace("dzi", "ďi", $tekst); //znak dla DZI
$tekst = str_replace("dź", "ď", $tekst);

$tekst = str_replace("dz", "đ", $tekst); //znak dla DZ

$tekst = str_replace("dż", "ç", $tekst); //znak dla DŻ

$tekst = str_replace("zi ", "źi ", $tekst);
//$tekst = str_replace("zi", "ź", $tekst);

$tekst = str_replace("ci ", "ći ", $tekst);
//$tekst = str_replace("ci", "ć", $tekst);

$tekst = str_replace("si ", "śi ", $tekst);
//$tekst = str_replace("si", "ś", $tekst);

$tekst = str_replace("rz", "ż", $tekst);

$tekst = str_replace("ch", "h", $tekst);

$tekst = str_replace("ó", "u", $tekst);
// KONIEC ZAMIAN

$wyrazy = split("[^a-zęąśłżźćńč#ďđç]",$tekst); //TU WYPADA ZWIĘKSZYĆ LICZBĘ MOŻLIWYCH PODZIAŁÓW
	
foreach($wyrazy as $w)
{
	if($w != null)
	$nowytekst .= dziel($w) . "|";
}


function antysr($a, $b, $c)
{
	return str_replace($b, $a, $c);
}

$nowytekst = antysr("cz", "č", $nowytekst); // znak dla CZ
$nowytekst = antysr("sz", "#", $nowytekst); //znak dla SZ

$nowytekst = antysr("ni ", "ńi ", $nowytekst);
//$nowytekst = antysr("ni", "ń", $nowytekst);

$nowytekst = antysr("dzi", "ďi", $nowytekst); //znak dla DZI
$nowytekst = antysr("dź", "ď", $nowytekst);

$nowytekst = antysr("dz", "đ", $nowytekst); //znak dla DZ

$nowytekst = antysr("dż", "ç", $nowytekst); //znak dla DŻ

$nowytekst = antysr("zi ", "źi ", $nowytekst);
//$nowytekst = antysr("zi", "ź", $nowytekst);

$nowytekst = antysr("ci ", "ći ", $nowytekst);
//$nowytekst = antysr("ci", "ć", $nowytekst);

$nowytekst = antysr("si ", "śi ", $nowytekst);
//$nowytekst = antysr("si", "ś", $nowytekst);



echo $nowytekst;
	
// uchwyt pliku, otwarcie do dopisania
$dozapisu = "SYL2" . $_GET["f"] . ".txt";

$fz = fopen($dozapisu, "w+");

// blokada pliku do zapisu 
flock($fz, 2); 
fwrite($fz, $nowytekst); //zapis
