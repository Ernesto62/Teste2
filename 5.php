<?php
$maior=-9999;
$menor=9999;
$soma=0;
$produto=1;
$num = array();

for ($i=0; $i < 15; $i++) { 
	$num[]=rand(1,1000);
}

foreach ($num as $key => $nume) {

	if ($nume>$maior) {
		$maior=$nume;
	}
	if ($nume<$menor) {
		$menor=$nume;
	}

	$soma+=$nume;
	$produto*=$nume;
}
$med=$soma/15;

echo "Numero maior: ".$maior;
echo "<br>";
echo "Numero menor: ".$menor;
echo "<br>";
echo "Media: ".$med;
echo "<br>";
echo "Produto: ".$produto;
?>