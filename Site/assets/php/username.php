<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['login'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	echo $_SESSION['login'];
}
else {
	echo 'None';
}
?>
