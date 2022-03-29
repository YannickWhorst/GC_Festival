<?php require_once 'header.php';
require_once '../src/userFunctions.php';

$tickets = db_getData("SELECT * FROM tickets");

//Check user login
$user = null;
if(isset($_POST['login']))
{
    $user = getUser($_POST['email'], $_POST['password']);
}

?>
    <div class="page tickets">
        <div class="container">
            <h1>Tickets bestellen</h1>
            <div class="ticketList">
                <?php if($user !== "No user found" && $user !== null) { ?>

                <form action="orderConfirmation.php" method="post">
                    <?php 
                    while($userData = $user->fetch_assoc()){
                    ?>
                    <label for="userID">Gebruikers ID</label>
                    <input type="number" name="userID" value="<?php echo $userData['id']; ?>">
                    <?php 
                    }
                    ?>
                    <br><br>

                    <label for="ticketSelect">Tickets</label>
                    <select name="ticketSelect" type="select">
                        <?php 
                        while($ticket = $tickets->fetch_assoc()) {
                        // while($ticket = $tickets->fetch(PDO::FETCH_ASSOC)){
                        ?>
                    <option name="<?php echo $ticket['name']; ?>" value="<?php echo $ticket['id']; ?>"><?php echo $ticket['name']; echo " €"; echo $ticket['price']; ?></option>
                    <?php }?>
                    </select>
                    <br><br>

                    <label for="amount">Hoeveelheid</label>
                    <input type="number" name="amount">
                    <br><br>

                    <input type="submit" name="order" value="Bestellen">

                </form>
                <?php } else { ?>
                <form action="#" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <br><br>

                    <label for="password">Wachtwoord</label>
                    <input type="password" name="password">
                    <br><br>

                    <input type="submit" value="Login" name="login">

                </form>
                <?php }?>
            </div>
        </div>
    </div>
<?php include 'footer.php';?>