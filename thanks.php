<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php

        if ($_POST) {
            $firstname = htmlspecialchars($_POST['user_firstname']);
            $name = htmlspecialchars($_POST['user_name']);
            $email = htmlspecialchars($_POST['user_email']);
            $phone = htmlspecialchars($_POST['phone_number']);
            $theme = htmlspecialchars($_POST['theme']);
            $message = htmlspecialchars($_POST['user_message']);

            if (
                empty($firstname) ||
                empty($name) ||
                empty($email) ||
                empty($phone) ||
                empty($message) ||
                !filter_var($email, FILTER_VALIDATE_EMAIL)
            ) : ?>
                Le format des données n'est pas correct ou les champs sont vides.
            <?php else : ?>
                <p>Merci <?= $firstname ?> <?= $name ?> de nous avoir contacté à propos de “<?= ($theme === 'life') ? 'Vie sur le campus' : $theme ?>”.</p>
    <p>Un de nos conseiller vous contactera soit à l’adresse <?= $email ?> ou par téléphone au <?= $phone ?> dans les plus brefs délais pour traiter votre demande :</p>
                <p><?= $message ?></p>
            <?php endif;?>
        <?php };?>
    </p>
</body>

</html>