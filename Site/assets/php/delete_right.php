<?php
session_start();

require_once('modele/MySQL.php');

if(isset($_POST['device']) isset($_POST['user']))
{
	if(!empty($_POST['device']) && !empty($_POST['user']))
	{
		// Defining variables
		$device_string = htmlspecialchars($_POST['device']);
		$user_string = htmlspecialchars($_POST['user']);

		// Defining MySQL request
		$inputdev = array('device_string' => $device_string);
		$inputusr = array('user_string' => $user_string);
		$sqldev = 'SELECT * FROM objects WHERE name = :device_string';
		$sqlusr = 'SELECT * FROM users WHERE login = :user_string';

		// Accessing the database
		$bdd = createBDD();

		// Getting location and dev
		$dev = execReq($bdd, $sqldev, $inputdev);
		$usr = execReq($bdd, $sqlusr, $inputusr);

		if(!empty($dev) && !empty($usr))
		{ 
			// Defining MySQL request
			$input = array('device' => $dev[id], 'user' => $usr[id]);
			$sqlauth = 'DELETE FROM `auth` WHERE `id_user` = :user, `id_obj` = :device);';

			// Getting the data
			execReq($bdd, $sql, $input);

			// Redirect to the settings
			echo '<script>alert("Right added successfully");</script>';
		}
		else
		{
			echo '<script>alert("Please enter all the fields");</script>';
		}

		/* header('Location: ../../objects_list.php'); */
	}
}
?>
