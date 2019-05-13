//<?php

	// echo "<pre>";
	// print_r($_GET);
	// echo "<pre>";

	// if (!isset($_GET['id'])){
	// 	exit('no this id 404');
	// }


	?>


<?php
$id = $_GET['id'];
var_dump($id);
$text = file_get_contents("data_get/$id");
?>


site`s header
<!-- <hr>
  <a href = "get.php?id=1">news1</a>
	<a href = "get.php?id=2">news2</a>
	<a href = "get.php?id=3">news3</a>
<hr> -->
<hr>
<?php
$files = scandir('data_get');
var_dump($files);
foreach ($files as $key) {
	if (is_file('data_get/' . $key)) {
		echo  "<a href=\"get.php?id=$key\">   $key</a>";
	}
}
// for ($i=1; $i <4 ; $i++) {
//  echo  "<a href=\"get.php?id=$i\">news$i</a>";
// 	 }
?>



<hr>
<?php
echo ($text);
?>
<hr>
site`s footer