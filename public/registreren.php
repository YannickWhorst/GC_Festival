<?php

require_once ('header.php');
require_once ('../src/userFunctions.php');

$newUser = null;
if(isset($_POST['register']))
{
    $newUser = registerUser($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['password']);
}

?>
    <div class="page registreren">
        <div class="container">
            <h1>Registreren</h1>
            <?php if($newUser === 1){?>
                <p>Nieuwe gebruiker succesvol toegevoegd!</p>
            <?php } else { ?>
            <form action="#" method="post">
                <div class="inputRow">
                    <label for="firstName">Voornaam</label>
                    <input type="text" name="firstName" required>
                    <br>
                    <br>
                    <label for="lastName">Achternaam</label>
                    <input type="text" name="lastName" required>
                    <br>
                    <br>
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                    <br>
                    <br>
                    <label for="password">Wachtwoord</label>
                    <input type="password" name="password" required>
                    <br>
                    <br>
                    <input type="submit" name="register" value="Registreer">
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
<?php include 'footer.php';?>
