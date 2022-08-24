<meta content="text/html; charset=windows-1250">

<p style="font-family: courier;">

<?php

if(isset($_POST["tresc"]))
{

$tresc = $_POST["tresc"];
$tresc = strtolower($tresc);
$tresc = preg_replace("/i([aeioóuyąę])/", "'$1", $tresc);

$slowa = explode(" ", $tresc);

$pre1 = array("/^przed/", "/^naj/", "/^pod/", "/^a/", "/^e/", "/^i/", "/^o/", "/^u/", "/ó/");
$pref = array("/^n'e/", "/^na/", "/^ze/", "/^do/", "/^po/", "/^roz/", "/^za/", "/^prze/", "/^bez/", "/^wy/", "/^przy/", "/^od/");

function pierwszyfonem($s)
{
    $k = substr($s, 0, 2);
    $k2 = substr($s, 1, 1);
    $di = array("cz", "dz", "dź", "dż", "sz", "ch", "rz");

    if(in_array($k, $di) || $k2=="'")
        return $k;
    else
        return substr($s, 0, 1);
}

foreach($slowa as $s)
{

    $pr="";
    foreach($pref as $p)
    {
        if(preg_match($p, $s))
        {
            $pr = substr($s, 0, strlen($p)-2);
            break;
        }
    }
    foreach($pre1 as $p)
    {
        if(preg_match($p, $s))
        {
            $pr = substr($s, 0, strlen($p)-2);
            break;
        }
    }



    $rdz = substr($s, strlen($pr));

    $dorozb = preg_replace("/([aeioóuyąę])/", "$1/", $rdz);
	$syl = explode("/", $dorozb);
	//rozbicie na sylaby
    //$skrot = $syl[0] . preg_replace("/([aeiouyąę])/", "", $syl[1]);
    $skrot = $syl[0] . pierwszyfonem($syl[1]);

    $znaki = array(".", ",", ":", "!", "?", ")");

    $wynik .= $pr . $skrot . " ";

    if(in_array($s[strlen($s)-1], $znaki))
        $wynik .= $s[strlen($s)-1] . " ";

}

echo "<p>$wynik</p>";

echo"<br><br><a href=\"konwer.php\">Wróć do formularza</a>";
}

else
{
   echo "<form action=\"konwer.php\" method=\"post\" enctype=\"multipart/form-data\">
Tresc: <input type=\"text\" name=\"tresc\"/><br>\n
<input type=\"submit\" /