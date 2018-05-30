<?php
require_once('MySQL.php');
function showObjects()
{
	$bdd = createBDD();
	$sql = 'SELECT * FROM categories';
	$data = execReq($bdd, $sql);
	/* print_r($data); */

	foreach ($data as $i) 
	{
		echo '<a class="dropdown-item" role="presentation" href="#">' . $i[type] . '</a>';
	}
}
?>
