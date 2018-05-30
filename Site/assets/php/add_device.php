<?php
session_start();

require_once('modele/MySQL.php');

if(isset($_POST['name']) && isset($_POST['description']) && isset($_POST['type']) && isset($_POST['location']) && isset($_SESSION['login']))
{
	if(!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['type']) && !empty($_POST['location']) && !empty($_SESSION['login']))
	{
		// Defining variables
		$name = htmlspecialchars($_POST['name']);
		$description = htmlspecialchars($_POST['description']);
		$type_string = htmlspecialchars($_POST['type']);
		$location_string = htmlspecialchars($_POST['location']);
		$owner = htmlspecialchars($_SESSION['login']);

		// Defining MySQL request
		$inputtype = array('type_string' => $type_string);
		$inputloc = array('loc' => $loc_string);
		$sqltype = 'SELECT * FROM categories WHERE type = :type_string';
		$sqlloc = 'SELECT * FROM locations WHERE location = :loc_string';

		// Accessing the database
		$bdd = createBDD();

		// Getting location and type
		$type = execReq($bdd, $sqltype, $inputtype);
		$loc = execReq($bdd, $sqlloc, $inputloc);

		if(!empty($type) && !empty($loc))
		{ 
			// Defining MySQL request
			$input = array('name' => $name, 'owner' => $owner, 'category' => $type[id], 'location' => $loc[id], 'description' => $descrition);
			$sql = 'INSERT INTO `objects` (`id`, `name`, `owner`, `category`, `location`, `description`, `state`) VALUES (NULL, :name, :owner, :category, :location, 0);';

			// Getting the data
			execReq($bdd, $sql, $input);

			// Redirect to the settings
			echo '<script>alert("Device added successfully");</script>';
		}
		else
		{
			echo '<script>alert("Please enter all the fields");</script>';
		}

		/* header('Location: ../../objects_list.php'); */
	}
}
?>
