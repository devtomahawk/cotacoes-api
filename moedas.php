<?php
error_reporting(0);

function pegaDados($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}

header('Content-Type: application/json; charset=UTF-8');

$americano = file_get_contents("https://dolarhoje.com/");
$australiano = file_get_contents("https://dolarhoje.com/dolar-australiano-hoje/");
$canadense = file_get_contents("https://dolarhoje.com/dolar-canadense-hoje/");
$neozelandes = file_get_contents("https://dolarhoje.com/dolar-neozelandes-hoje/");
$euro1 = file_get_contents("https://dolarhoje.com/euro/");
$iene1 = file_get_contents("https://dolarhoje.com/iene/");
$libra1 = file_get_contents("https://dolarhoje.com/libra-hoje/");
$ouro1 = file_get_contents("https://dolarhoje.com/ouro-hoje/");
$pesoArgentino1 = file_get_contents("https://dolarhoje.com/peso-argentino/");
$pesoChileno1 = file_get_contents("https://dolarhoje.com/peso-chileno/");
$pesoUruguaio1 = file_get_contents("https://dolarhoje.com/peso-uruguaio/");
$wonSulCoreano1 = file_get_contents("https://dolarhoje.com/won-sul-coreano-hoje/");
$yuan1 = file_get_contents("https://dolarhoje.com/yuan-hoje/");


$dolarAmericano = pegaDados($americano, '<span class="cotMoeda nacional"><span class="symbol">R$</span><input type="text" id="nacional" value="','"/></span>');
$dolarAustraliano = pegaDados($australiano, '<input type="text" id="nacional" value="','"/>');
$dolarCanadense = pegaDados($canadense, '<span class="cotMoeda nacional"><span class="symbol">R$</span><input type="text" id="nacional" value="','"/></span>');
$dolarNeozelandes = pegaDados($neozelandes, '<span class="cotMoeda nacional"><span class="symbol">R$</span><input type="text" id="nacional" value="','"/></span>');
$euro = pegaDados($euro1, '<span class="cotMoeda nacional"><span class="symbol">R$</span><input type="text" id="nacional" value="','"/></span>');
$iene = pegaDados($iene1, '<span class="cotMoeda estrangeira"><span class="symbol">¥</span><input type="text" id="estrangeiro" value="','"/></span>');
$libra = pegaDados($libra1, '</span><span class="cotMoeda nacional"><span class="symbol">R$</span><input type="text" id="nacional" value="','"/></span>');
$ouro = pegaDados($ouro1, '</span><input type="text" id="nacional" value="','"/></span>');
$pesoArgentino = pegaDados($pesoArgentino1, '/span><input type="text" id="nacional" value="','"/></span>');
$pesoChileno = pegaDados($pesoChileno1, '<input type="text" id="estrangeiro" value="','"/></span>');
$pesoUruguaio = pegaDados($pesoUruguaio1, '<input type="text" id="nacional" value="','"/></span>');
$wonSulCoreano = pegaDados($wonSulCoreano1, '<input type="text" id="nacional" value="','"/></span>');
$yuan = pegaDados($yuan1, '<input type="text" id="nacional" value="','"/></span');

$array = array(
	"dolarAmericano" => $dolarAmericano,
	"dolarAustraliano" => $dolarAustraliano,
	"dolarCanadense" => $dolarCanadense,
	"dolarNeozelandes" => $dolarNeozelandes,
	"euro" => $euro,
	"iene" => $iene,
	"libra" => $libra,
	"ouro" => $ouro,
	"pesoArgentino" => $pesoArgentino,
	"pesoChileno" => $pesoChileno,
	"pesoUruguaio" => $pesoUruguaio,
	"wonSulCoreano" => $wonSulCoreano,
	"yuan" => $yuan,
	"status" => true
);
$json = json_encode($array, JSON_PRETTY_PRINT);
print $json;

?>