<select>
	<?php

	for ($i = 1971; $i <= 2012; $i++) {
		echo "<option value=\"$i\">$i</option>";
	}
	?>
</select>


<br>

<?php


$arr = [
	'Ukraine' => 'KharkovFirstCapital',
	'England' => 'London',
	'France' => 'Paris',
	'Germany' => 'Berlin',
	'USA' => 'Washington',
	'China' => 'Pekin'
];


foreach ($arr as $key => $value) {
	echo "$key=>$value.<br>";
}


//for ($i=0; $i<count($capital); $i++)
//foreach ($arr as $ui)
//{
//echo $capital[$i].'<br>';
//echo $ui;
//echo "<br>" ;
//}

?>