<?php
date_default_timezone_set('Europe/Brussels');
session_start();

if(isset($_POST['login']) || isset($_POST['pwd']))
{
	if(!empty($_POST['login']) && !empty($_POST['pwd']))
	{
		// Defining variables
		$login = htmlspecialchars($_POST['login']);
		$pwd = sha1($_POST['pwd']);

		# Connecting to the Mysql database

		$sql = 'SELECT * FROM users WHERE login = ":login" && pwd = ":pwd" ';
		$param = array('login' => $_POST['login'], 'pwd' => $pwd);
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', 'Admin2015');
		}
		catch (Exception $e) 
		{
			echo '<p> Error connecting to the database, please try again<p> '.$e; //TODO redirect an error page and log error
		}

		$req = $bdd -> prepare($sql);

		$data = $req -> execute($param);


		if(!empty($data))
		{ 
			$_SESSION['connected'] = 1;
			$_SESSION['id'] = $data['id'];
			$_SESSION['login'] = $data['login'];
			header('Location: ../../objects_list.html');
			}
		else
		{
			session_destroy();
			echo '<p> Login or password invalid ! </p>';
		}
	}
}
