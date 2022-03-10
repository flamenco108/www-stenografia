<?php
/************************************
Autorstwo pierwotne: Miko�aj Gogela
Przer�bka 
i uzupe�nienie skryptu: Krzysztof Smirnow
************************************/
//if ($_GET='') {$wyswietla='czacha'} else {$wyswietla= $_GET['wyswietl']};
//$wyswietla="obrazek";
$wyswietla = $_GET['wyswietl'];
$obraz = $_GET['obrazek'];
//funkcja przeliczajaca wielkosc pliku na ludzkie miary
function fsize($file) {
        $a = array("B", "KB", "MB", "GB", "TB", "PB");

        $pos = 0;
        $size = filesize($file);
        while ($size >= 1024) {
                $size /= 1024;
                $pos++;
        }

        return round($size,2)." ".$a[$pos];
}
////////////


echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl">
<head>
<meta name="GENERATOR" content="" />
<meta name="AUTHOR" content="Krzysztof Smirnow, flamenco108@gmail.com" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META NAME="ROBOTS" CONTENT="noindex,nofollow">

<style type="text/css">
<!--

/* jeszcze raz:  do zrobienia takiego ukladu styl-xhtml, ktory tylko wymagalby poprawiania pliku css zby zmienic uklad graficzny strony */
/*tu uklad kolorystyczny z opisem
w kolejnosci jasnosi:
T�A:
#FFFFCC - ecru (temat - uniwersalny kontener)
#CCCC66 - seledynek(?) (ramka)
#CCCC99 - be-zowy (np. tresc)
#999966 - brazowy (body)
CZCIONY:
#CCCCFF - jasny blekit
#9966CC - lazur
#666699 - ciemnoniebieski
#666666 - siny granat
#000000 - czarny
*/

body {
	scrollbar-3dlight-color : #FFFFCC;
	scrollbar-arrow-color : black;
	scrollbar-base-color : #CCCC99;
	scrollbar-darkshadow-color : Black;
	scrollbar-face-color : #CCCC99;
	scrollbar-highlight-color : #FFFFCC;
	scrollbar-shadow-color : #FFFFCC;
	scrollbar-track-color : #999966;
background-color:#999966;
padding:10px;
margin:10px;

}

a {
color:#666666;
text-decoration: none;
font-size: small;
}
a:link {
color:#666666;
text-decoration:none;
font-size: small;
}
a:active {
color:#666666;
text-decoration:none;
font-size: small;
}
a:hover {
color:#666666;
text-decoration: underline;
font-size: small;
}
/*
a:visited {
color:#666666;
text-decoration: none;
font-size: small;
}
*/

p {

text-decoration:none;
font-size: small;
}

.mikro { font-size: xx-small; }

/* zgodnie z W3C zamieniam klasy na idy i tak dalej */
/* idy sluza opisowi elementow struktury dokumentow */
/*TYTUL*/
#tytul {
/* width:80%; */
font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
border: 1px solid #CCCC99;
position:relative;
-moz-border-radius: 10px;
padding:10px 10px 10px 10px;
margin: 10px 30px 10px 10px;
font-size:big;
font-weight:bolder;
text-align:center;
}
/*NAGLOWEK*/
#naglowek {
background-color:#CCCC99;
padding: 10px 10px;
margin: 30px 30px 30px 30px;
font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
-moz-border-radius: 10px;
}
/*MENU*/
#menu {
background-color:#999966;
border: 1px solid #CCCC99;
-moz-border-radius: 10px;
padding: 5px 5px 5px 0px;
margin: 5px 10px 10px 10px;
width: 200px;
float: left; 
text-align: left;
font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;


}
.menu {
list-style-type:none;
list-style-position: inside;
padding: 5px 5px 5px 5px;
margin: 5px 5px 5px 5px;
color:#ccccff;
text-align: left;
font-weight:bolder;
}

#submenu {
background-color:#999966;
border: 1px solid #CCCC99;
-moz-border-radius: 10px;
padding: 5px 5px 5px 0px;
margin: 5px 10px 10px 10px;
width: 200px;
float: right; 
text-align: right;
font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
}
.submenu {
list-style-type:none;
list-style-position: inside;
padding: 5px 5px 5px 5px;
margin: 5px 5px 5px 5px;
color:#ccccff;
text-align: right;
font-weight:bolder;
}

/*MENU*/
/*
#menu {
background-color:#999966;
border: 1px solid #CCCC99;
-moz-border-radius: 10px;
padding: 5px 5px 5px 0px;
margin: 5px 10px 10px 10px;
width: 200px;
float: left; 
text-align: left;
font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
clear: right;

}
.menu {
list-style-type:none;
list-style-position: inside;
padding: 5px 5px 5px 5px;
margin: 5px 5px 5px 5px;
color:#ccccff;
text-align: left;
font-weight:bolder;
}
/*MENU PRAWE*/
/*#submenu {
	background-color: #999966;
	border: 1px solid #CCCC99;
	-moz-border-radius: 10px;
	padding: 5px 5px 5px 0px;
	margin: 10px 10px 10px 10px;
	width: 200px;
	float: right;
	text-align: right;
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; 
	clear: both;

}
.submenu {
list-style-type:none;
list-style-position: inside;
padding: 5px 5px 5px 5px;
margin: 5px 5px 5px 5px;
color:#ccccff;
text-align: right;
font-weight:bolder;
}
*/



/*TRESC*/
#tresc {
	background-color: #CCCC99;
	padding: 10px 10px;
	margin: 30px 30px 30px 30px;
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	-moz-border-radius: 10px;


}

/*STOPKA*/
#stopka {
background-color:#CCCC99;
padding: 10px 10px;
margin: 30px 30px 30px 30px;
font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
-moz-border-radius: 10px;
}

/* klasy sluza opisowi elementow funkcjonalnych dokumentu */

.ramka {
background-color:#CCCC66;
padding: 5px 5px;
margin: 5px 5px;
-moz-border-radius: 10px;
}

.temat {
background-color:#FFFFCC;
padding:10px;
margin:10px;
font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
-moz-border-radius: 10px;
}

.listing {
	padding: 10px;
	margin: 10px;
	font-family: "Courier New", Courier, monospace;
	background-color: #332255;
	color: #ccccff;
	-moz-border-radius: 10px;
}

table {
border-color:#CCCC99;
border-collapse: collapse;
font-size: small;

}

/*hierarchia elementow jest nastepujaca:
<html>
<body>
<div id="tresc">
	<div class="ramka">
		<div class="temat">
<p>
*/


-->
</style>



</HEAD>

<BODY>
<basefont face=arial>
<div align="center">
<div id="tytul">
<h2>LISTA PLIKÓW/KATALOGÓW.</h2>
</div>';

//echo '<p>ZMIENNA $wyswietla: '.$wyswietla.'</p>';



echo '
<div class=ramka>
<div class=temat>
';

echo '<h3>>><a href="upload.php">Jeżeli chcesz załadować lub skasować plik, kliknij mnie!</a><<</h3>';

switch ($wyswietla) {
	default:


	echo"<table align=\"center\" border=1>";
	$Kat='.';
	$OpenKat=opendir($Kat);
	while (false!==($plik=readdir($OpenKat))) $pliki[] = $plik;
	closedir($OpenKat);
	// posortowa�wg dat w nazwach
	sort($pliki);
	$N=count($pliki);
	for ($i=0;$i<$N;$i++)
	{
 		if ($pliki[$i]!="."&&$pliki[$i]!=".."&&$pliki[$i]!="index.php")
 		{
			$wielkosc=fsize($pliki[$i]);
			echo "<tr>"; //linijka, dalej komorki
			//1 kolumna rozpoznanie typow
			if (eregi(".jpg",$pliki[$i])) echo "<td>plik graficzny --></td>"."\n";
			else if (eregi(".gif",$pliki[$i])) echo "<td>plik graficzny --></td>"."\n";
			else if (eregi(".tif",$pliki[$i])) echo "<td>plik graficzny --></td>"."\n";
			else if (eregi(".png",$pliki[$i])) echo "<td>plik graficzny --></td>"."\n";
			else if (eregi(".pdf",$pliki[$i])) echo "<td>plik PDF --></td>"."\n";
			else if (eregi(".exe",$pliki[$i])) echo "<td>program --></td>"."\n";
			else if (eregi(".txt",$pliki[$i])) echo "<td>plik tekstowy --></td>"."\n";
			
			else if (eregi("~",$pliki[$i])) echo "<td>plik backupu edytora --></td>"."\n";
			
			else if (eregi(".htm",$pliki[$i])) echo "<td>plik strony www --></td>"."\n";
			else if (eregi(".php",$pliki[$i])) echo "<td>plik kodu PHP --></td>"."\n";
			else if (eregi(".php~",$pliki[$i])) echo "<td>plik VIM backup --></td>"."\n";
			else if (eregi(".phtml",$pliki[$i])) echo "<td>plik kodu ZEND --></td>"."\n";
			else if (eregi(".css",$pliki[$i])) echo "<td>plik stylu CSS --></td>"."\n";
			
			else if (eregi(".inc",$pliki[$i])) echo "<td>plik kodu --></td>"."\n";
			else if (eregi(".inc~",$pliki[$i])) echo "<td>plik VIM backup --></td>"."\n";
			
			else if (eregi(".odt",$pliki[$i])) echo "<td>plik OpenOffice tekst --></td>"."\n";
			else if (eregi(".ods",$pliki[$i])) echo "<td>plik OpenOffice arkusz --></td>"."\n";
			else if (eregi(".doc",$pliki[$i])) echo "<td>plik MSOffice Word --></td>"."\n";
			else if (eregi(".xls",$pliki[$i])) echo "<td>plik MSOffice Excel --></td>"."\n";
			
			else if (is_dir($pliki[$i])) echo "<td><strong>KATALOG --></strong></td>"."\n";
			else echo "<td>&nbsp</td>"."\n";
			//2 kolumna nazwa i rozmiar pliku
			/*
			echo "<td><strong>$pliki[$i]\n</strong></td><td>rozmiar: $wielkosc</td>";
			*/
			
			echo '<td>rozmiar: '.$wielkosc.'</td>'."\n";
			
			
			if (is_dir($pliki[$i])) echo '<td colspan=2><a href="'.$pliki[$i].'" alt="wejdź do KATALOGU">'.$pliki[$i].'</a></td>'."\n";
       	        else {	
			echo '<td>';
			if  (eregi(".jpg",$pliki[$i])|eregi(".gif",$pliki[$i])|eregi(".png",$pliki[$i])|eregi(".tif",$pliki[$i])) {
			echo '				
			<!-- <form action="'.$REQUEST_URI.'" method="GET"> -->
			<a href="'.$_SERVER['PHP_SELF'].'?wyswietl=obrazek&obrazek='.$pliki[$i].'" alt="wyświetl obrazek">'.$pliki[$i].'</a></td>
			<!-- </form> -->'."\n";
				}
			else { echo '<td><a href="'.$pliki[$i].'" alt="pobierz/uruchom">'.$pliki[$i].'</a></td>'."\n";}
			}

			
			
			//3 kolumna czynnosc
			/*
			if (is_dir($pliki[$i])) echo "<td colspan=2><a href=\"$pliki[$i]\">wejdź do KATALOGU</a></td>";
       	        else {	
			echo '<td>';
			if  (eregi(".jpg",$pliki[$i])|eregi(".gif",$pliki[$i])|eregi(".png",$pliki[$i])|eregi(".tif",$pliki[$i])) {
			echo '				
			<!-- <form action="'.$REQUEST_URI.'" method="GET"> -->
			<a href="'.$_SERVER['PHP_SELF'].'?wyswietl=obrazek&obrazek='.$pliki[$i].'">wyświetl obrazek</a></td>
			<!-- </form> -->'; 
				}
			else { echo '<td><a href="'.$pliki[$i].'">uruchom/pobierz</a></td>';}
			}
			*/

		}
       	        
	        echo '</tr>';
	}

	break;

	case obrazek:
		echo '
		<a href="javascript:history.go(-1)">WRÓĆ</a><br /><hr />
		<img src="'.$obraz.'" />
		<hr /><br />
		<a href="javascript:history.go(-1)">WRÓĆ</a>
		'."\n";
	break;

}
?>
</div>
</div>



</div>

<div class="stopka">

<?php
$dzis_dzien = date("d");
$dzis_miesiac = date("m");
$dzis_rok = date("Y");
$dzis_godzina = date("H");
$dzis_minuta = date("i");
$dzis_sekunda = date("s");

echo '<p>Copyright &#169; 2006&nbsp;-&nbsp;'.$dzis_rok.'  <a href="mailto:flamenco108@gmail.com?subject=Ze_strony-http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].'" alt="Napisz do mnie">by</a>
&nbsp;<a href="http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].'">Flamenco108</a>';

?>

</div>


<?php
/*
echo 'PATH_TRANSLATED'.' = '.$_SERVER['PATH_TRANSLATED']."<br />\n";
echo 'REQUEST_URI'.' = '.$_SERVER['REQUEST_URI']."<br />\n";
echo 'SCRIPT_FILENAME'.' = '.$_SERVER['SCRIPT_FILENAME']."<br />\n";
echo 'QUERY_STRING'.' = '.$_SERVER['QUERY_STRING']."<br />\n";
echo 'SERVER_NAME'.' = '.$_SERVER['SERVER_NAME']."<br />\n";
echo 'PHP_SELF'.' = '.$_SERVER['PHP_SELF']."<br />\n";
echo 'SERVER_PROTOCOL'.' = '.$_SERVER['SERVER_PROTOCOL']."<br />\n";
echo ''.' = '.$_SERVER['']."<br />\n";
echo ''.' = '.$_SERVER['']."<br />\n";
echo ''.' = '.$_SERVER['']."<br />\n";
*/
?>

</BODY>
</HTML>
