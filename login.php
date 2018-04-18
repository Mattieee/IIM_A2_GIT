<?php session_start();

/******************************** 
	 DATABASE & FUNCTIONS 
********************************/
require('config/config.php');
require('model/functions.fn.php');


/********************************
			PROCESS
********************************/



if(isset($_POST['email']) && isset($_POST['password'])){
	if(!empty($_POST['email']) && !empty($_POST['password'])){

		// TODO

		// Force user connection to access dashboard
		userConnection($db, 'git@initiation.com', 'password');
		
		header('Location: dashboard.php');

	}else{
		$error = 'Champs requis !';
	}
}
$bdd = new PDO('mysql:host=localhost;dbname=iim_git_soundcloud', 'root', '');

$req = $bdd->query('SELECT * FROM filtre');

$mots = [];
$rp = [];

while($m = $req->fetch()) {
    array_push($mots, $m['mot']);
    $r = '';
    for($i=0;$i<strlen($m['mot']);$i++) {
        $r .= '*';
    }
    array_push($rp, $r);
}


//var_dump($mots);
//var_dump($rp);


/******************************** 
			VIEW 
********************************/
include 'view/_header.php';
include 'view/login.php';
include 'view/_footer.php';