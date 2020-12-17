<?php
// Verification EMAIL
$email = $_POST['email'];
$point = strpos($email, ".");
$aroba = strpos($email, "@");

if (empty($_POST['email'])) {
    echo 'Veuillez saisir un email.';
} else if ($point === false) {
    echo 'Votre email doit comporter un point.';
} else if ($aroba === false) {
    echo 'Votre email doit comporter un arobase.';
} else {
    echo 'Votre email est : ' . $email;
}

// Verification mot de passe
function check_mdp_format($mdp)
{
    $mp = $_POST['password'];
	$majuscule = preg_match('@[A-Z]@', $mp);
	$minuscule = preg_match('@[a-z]@', $mp);
	$chiffre = preg_match('@[0-9]@', $mp);
	
	if(!$majuscule || !$minuscule || !$chiffre || strlen($mp) < 8)
	{
		return false;
	}
	else 
		return true;
}

if (check_mdp_format($_POST['password']) != true)
{
    echo "<br/>";
    echo "<br/>";
	echo "Mot de passe invalide";	
}
else {
    echo "<br/>";
    echo "<br/>";
    echo "Mot de passe valide";
    echo "<br/>";
    echo "<br/>";
    }

if ($_POST['password'] != $_POST['vPassword'] ) {
    echo "<br>";
    echo "Recommence";
    echo "<br>";
} else {
    echo "<br>";
    echo "valide";
    echo "<br>";
}

// verification tel

function check_tel_format($tel)
{
    $tel = $_POST['tel'];
	$reg = preg_match('@[0-9]@', $tel);

	
	if(!$reg || strlen($tel) < 10)
	{
		return false;
	}
	else 
		return true;
}

if (check_tel_format($_POST['tel']) != true)
{
    echo "<br/>";
    echo "<br/>";
	echo "Tel non correct";	
}
else {
    echo "<br/>";
    echo "<br/>";
    echo "Tel correct";
    echo "<br/>";
    echo "<br/>";
    }


var_dump ($_POST);
echo 'nom : '.$_POST["nom"].'<br>';
echo 'prenom : ' .$_POST["prenom"].'<br>';
echo 'tel : ' .$_POST["tel"].'<br>';
echo 'email : ' .$_POST["email"].'<br>';
echo 'pseudo : ' .$_POST["pseudo"].'<br>';
?>