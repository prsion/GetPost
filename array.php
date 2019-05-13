<!-- <?php
			$capital = ['Kiev', 'London', 'Paris', 'Berlin', 'Washington', 'Madrid'];
			for ($i = 0; $i < count($capital); $i++) {
				echo $capital[$i] . '<br>';
			}
			?> -->


<?php
$capital = [
	"Spain" => ["Barcelona", "Madrid", "Valencia", "Atletico"],
	"England" => ["Liverpool", "Oxford", "Sheffield"],
	"Italy" => ["Juventus", "Milan", "Inter", "Roma"],
];


echo '<ul>';
foreach ($capital as $key => $value) {
	echo '<li>' . $key . '</li><ul>';
	for ($y = 0; $y < count($value); $y++) {
		//echo "$key=>$value[$y].<br>";
		echo '<li>' . $value[$y] . '</li>';
	}
	echo '</ul>';
}
echo '</ul>';



echo 'string';




$arr1 = array(array('Mersedes', 'BMW', 'Honda', 'Bently', 'Fiat'), array('Red', 'Blue', 'Green'));

echo '<ul>';
for ($i = 0; $i < count($arr1); $i++) {
	echo '<li>' . $i . '</li><ul>';
	for ($y = 0; $y < count($arr1[$i]); $y++) {
		echo '<li>' . $arr1[$i][$y] . '</li>';
	}
	echo '</ul>';
}
echo '</ul>';




?>