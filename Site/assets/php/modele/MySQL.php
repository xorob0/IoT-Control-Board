<?php
	date_default_timezone_set('Europe/Brussels');

	function createBDD()
	{
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', 'Admin2015');
		}
		catch (Exception $e) 
		{
			echo '<p> Error connecting to the database, please try again<p> '.$e; //TODO redirect an error page and log error
		}
		return $bdd;
	}
	
	function execReq($bdd, $sql, $input)
	{
		$req = $bdd -> prepare($sql);
    	$req -> execute($input);
    	$data = $req -> fetch();
		return $data;
	}
?>
