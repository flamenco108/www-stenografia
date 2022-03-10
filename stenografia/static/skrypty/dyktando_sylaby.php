<!DOCTYPE html>
<html lang="pl-pl">
<head><script src="/livereload.js?mindelay=10&amp;v=2&amp;port=1313&amp;path=livereload" data-no-instant defer></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="Hugo 0.83.1" />
	<meta name="AUTHOR" content="Jan Rzymkowski, No-qanek, no-qanek@stenografia.pl" /> 
	
	<title>Repozytorium - Nondum lingua suum, dextra peregit opus</title>

	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/strange-case.css" rel="stylesheet">
	

	
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	
	<link href="../repo/index.xml" rel="alternate" type="application/rss+xml" title="Steno2" />
	
	<link rel="shortcut icon" href="../images/favicon.ico">
</head>
<body class="scheme-steno">


	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-md-3 col-lg-3 sidebar">

			
	<div class="sidebar-content">

		<a href="//localhost:1313/"><h1>Steno2</h1></a>
		<p>Nondum lingua suum, dextra peregit opus</p>


		
		<div class="sidebar-freetext">
			<p>Druga odsłona stenografii</p>
		</div>
		


		<ul class="sidebar-menus sidebar-icons">
                  
                </ul>

		<ul class="sidebar-menus">
                  
                   
				   <li><span class='glyphicon glyphicon-off'></span> <a href="../../">Strona główna </a></li>
                  
                   
				   <li><span class='glyphicon glyphicon-search'></span> <a href="../../search/">Wyszukiwarka</a></li>
                  
                   
				   <li><span class='glyphicon glyphicon-send'></span> <a href="../../blog/">Blog stenograficzny </a></li>
                  
                   
				   <li><span class='glyphicon glyphicon-pencil'></span> <a href="../../stenografia/">Stenografia </a></li>
                  
                   
				   <li><span class='glyphicon glyphicon-user'></span> <a href="../../stenografowie/">Stenografowie </a></li>
                  
                   
				   <li><span class='glyphicon glyphicon-globe'></span> <a href="../../historia_powszechna/">Historia Powszechna </a></li>
                  
                   
				   <li><span class='glyphicon glyphicon-home'></span> <a href="../../historia_polska/">Historia Polska </a></li>
                  
                   
				   <li><span class='glyphicon glyphicon-asterisk'></span> <a href="../../roznosci/">Różności </a></li>
                  
                   
				   <li><span class='glyphicon glyphicon-book'></span> <a href="../../repo/">Repozytorium </a></li>
                  
                   
				   <li><span class='glyphicon glyphicon-earphone'></span> <a href="../../kontakt/">Kontakt </a></li>
                  
                </ul>

		<div class="sidebar-recent hidden-xs">
                  <p>Randomowe wpisy blogowe:</p>
                  <ul>
                    
					    <li>&#187; <a href="//localhost:1313/blog/2010-11-17_dobry-trafil-sie-low/">Dobry trafił się łów.</a></li>
                    
					    <li>&#187; <a href="//localhost:1313/blog/2013-10-03_co-mnie-ostatnio-odwleka-od-pisania-lekcji-stenografii/">Co mnie ostatnio odwleka od pisania lekcji stenografii?</a></li>
                    
					    <li>&#187; <a href="//localhost:1313/blog/2010-11-30_artystyczny-szorthend/">Artystyczny szorthend</a></li>
                    
					    <li>&#187; <a href="//localhost:1313/blog/2010-12-02_babcine-przepisy-na-ciastka/">Babcine przepisy na ciastka</a></li>
                    
					    <li>&#187; <a href="//localhost:1313/blog/2010-11-01_do-czego-komu-potrzebna-stenografia/do-czego-komu-potrzebna-stenografia/">Do czego komu potrzebna stenografia?</a></li>
                    
                  </ul>
                </div>

		

		
		
		
		<p class="copyright">&copy; 2021
		<span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Stenografia.pl</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="https://stenografia.pl" property="cc:attributionName" rel="cc:attributionURL">Krzysztof Smirnow</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Licencja Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /> International</a>. </p>
		
		
		
		<p class="attr">Powered by <a href="http://gohugo.io">Hugo</a> &amp; <a href="https://github.com/ExchangeRate-API/strange-case">Strange Case</a> (inspired by <a href="https://github.com/poole/hyde">Hyde</a> and <a href="https://www.glyphicons.com/">Glyphicons</a>).</p>
		
		

	</div>


			</div>
			<div class="col-sm-7 col-sm-offset-4 col-md-6 col-md-offset-3 col-lg-5 col-lg-offset-3 content">
			
			

				<div class="post">
				
				
					<div class="post-heading">
						<h1>Przelicznik sylab na czas do celu przygotowania dyktanda z określoną prędkością</h1>
					</div>



<p style="font-family: monospace;">

<?php

if(isset($_POST["czasnal"]) && isset($_POST["namin"]))

{

$tekst = $_POST["text"];

//parametry

$namin = $_POST["namin"];
$czasnal = $_POST["czasnal"];
//$nalinijke = $_POST["nalinijke"];

//XXXoczyszczenie tekstu do postaci litery i spacje
//dzielenie na wyrazy
//tabela wyrazów

//$wyrazy = preg_split("/[\s,]+/", $tekst);
$wyrazy = preg_split("/[ \n]/", $tekst);
//$wyrazy = preg_split("/ /", $tekst);

//zamiana ia, ie, ... na 'a
//podział na sylaby
//tabela długości wyrazów (count tabeli sylab - 1)

foreach($wyrazy as $k => $v)
{
	$v = preg_replace("/i([aeiouyąę])/", "'$1", $v);
	$syl = preg_split("/[aeiouyąę]/", $v);
	$dlwyr[$k] = count($syl)-1;
	$total += $dlwyr[$k];
}

//wypisywanie

$nasyl = 1/$namin*60;

		$min = floor($total*$nasyl/60);
		$sec = floor($total*$nasyl) - $min*60;
		if($sec > 9)
		{
			$p = $min . ":" . $sec;
		} else
		{
			$p = $min . ":0" . $sec;
		}

		
$l_wyrazow = count($wyrazy);
//czas czytania
$cz_czyt = round($total*$nasyl,2);
//$sl_n_min = round(l_wyrazow/$cz_czyt,0);
$sl_n_min = $l_wyrazow/$cz_czyt * 60;

//echo ($l_wyrazow * 2)."<br />\n";
//echo ($cz_czyt * 2)."<br />\n";
//echo ($sl_n_min * 2)."<br />\n";
//$a=$l_wyrazow;$b=2;echo $a / $b."<br />\n";
//$a=$cz_czyt;$b=2;echo $a / $b."<br />\n";
//$a=$l_wyrazow;$b=$cz_czyt;echo $a / $b."<br />\n";



$tresc .= 'Liczba słów w tekście: '.$l_wyrazow."<br />\n";
$tresc .= "Łącznie sylab w tekście: $total<br />\n";
$tresc .= "Łączny czas czytania: " .$cz_czyt. "s (" . $p . ")<br />\n";
$tresc .= "Prędkość (slpm): $namin sylab na minutę<br />\n";
$tresc .= 'Prędkość (spm): '.round($sl_n_min,0).' słów na minutę '."<br />\n<br />\n";
		
		
//wariant 1. całość jako sekundy w nawiasach

/*foreach($wyrazy as $k => $v)
{
	$tresc .= $v . " (" . round($dlwyr[$k]*$nasyl,2) . "s) ";
}*/

//(wariant 2. dla fraz. Ilość słow potrzeba na określoną ilośc sekund) //usuwanie \n z tekstu
//mozna zrobić tabelę dla przejrzystości


$nalinijke = $czasnal/$nasyl;

foreach($dlwyr as $k => $v)
{
	if($n + $v >= $nalinijke)
	{
		$t = floor(($n + $v)*$nasyl);
		$s+=$t;
		$min = floor($s/60);
		$sec = $s - $min*60;
		if($sec > 9)
		{
			$p = $min . ":" . $sec;
		} else
		{
			$p = $min . ":0" . $sec;
		}
	
		//$r = round(($n + $v)*$nasyl,2) - $t;
		//$tresc .=  $zeb . $wyrazy[$k] . " (" . $p . ") ";
		$tresc .=  $zeb . $wyrazy[$k] . " (" . $p . ") ".'<br />'."\n";
		$zeb = "";
		$n = (round(($n + $v)*$nasyl,2)-$t)/$nasyl;
	}
	else
	{
		$n += $v;
		$zeb .= $wyrazy[$k] . " ";
	}
}

	if($n>0)
	{
		$min = floor($s/60);
		$sec = $s - $min*60;
		if($sec > 9)
		{
			$p = $min . ":" . $sec;
		} 
		else
		{
			$p = $min . ":0" . $sec;
		}


		//$tresc .=  $zeb . " (" . $p . ") ";		
		$tresc .=  $zeb . " (" . $p . ") ".'<br />'."\n";
	}
	
	echo '<hr />';		
	echo $tresc;
	echo '<hr />';	

	echo '<br /><br />
	 <button onclick="goBack()"><strong>Wróć do poprzedniej strony</strong></button>

	<script>
	function goBack() {
	  window.history.back();
	}
	</script> 

	';

}
else {
	//echo '
	//	<h1>Przelicznik sylab na czas do celu przygotowania dyktanda z określoną prędkością</h1>
	//	
	//';
	
	echo '<form action="dyktando_sylaby.php" method="post" enctype="multipart/form-data">'."\n";
	echo '<h3>Wpisz tekst:</h3><textarea type="text" name="text" cols="80" rows="10"></textarea><br />'."\n";
	/* echo 'Tekst: <input type="text" name="text"/><br />'."\n"; */
	echo 'Sylab na minutę: <input type="text" name="namin" /><br />
	Czas na linijkę: <input type="text" name="czasnal" /><br />
	<input type="submit" value="Przelicz"/>
	</form>';		
}

	
?>


</p>

</div></div>

</body>
</html>