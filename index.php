<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&family=Indie+Flower&family=Niconne&display=swap" rel="stylesheet">
    <title>Connection</title>
</head>
<body>
    <h1>Premiere connection</h1>
    <div class="formulaire">
        <form action="traitement.php" method="post" id="form-1">
                <label>Adresse E-mail</label><br>
                <input type="text" placeholder="Nom" name="nom" required><br><br>
        
                <label>Prénom</label><br>
                <input type="text" placeholder="Prénom" name="prenom" required><br><br>

                <label>Numero de telephone portable</label><br>
                <input type="tel" placeholder="+33" name="tel" required><br><br>

                <label>Adresse E-mail</label><br>
                <input type="email" placeholder="adresse@mail.com" name="email" required><br><br>

                <label>Pseudo</label><br>
                <input type="text" placeholder="Pseudo" name="pseudo" required><br><br>

                <label>Mot de passe</label><br>
                <input type="password" placeholder="password" name="password" required><br><br>

                <label>Vérification mot de passe</label><br>
                <input type="password" placeholder="password" name="vPassword" required><br><br>
                <div id="btn">
                    <button type="submit" form="form-1" id="but">Connection</button>
                </div>
        </form>
    </div>
    <div class="attribution"> 
        <br>
         by <a href="https://github.com/Kuumette">Kuumette</a>.
    </div>
</body>

</html>