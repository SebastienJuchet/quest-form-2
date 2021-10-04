<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="thanks.php" method="post">
        <div>
            <label for="prenom">Prenom :</label>
            <input type="text" id="prenom" name="user_firstname" required>
        </div>
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="user_name" required>
        </div>
        <div>
            <label for="courriel">Courriel :</label>
            <input type="email" id="courriel" name="user_email" pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" required>
        </div>
        <div>
            <label for="phone-number">Numero de tel :</label>
            <input type="text" id="phone-number" name="phone_number" required>
        </div>
        <div>
            <label for="theme"></label>
            <select name="theme" id="theme" required>
                <option value="">Choisissez votre thème</option>
                <option value="wild">Wild Code School</option>
                <option value="life">Vie du campus</option>
                <option value="cours">Cours</option>
                <option value="divers">Divers</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message" required></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>

</html>