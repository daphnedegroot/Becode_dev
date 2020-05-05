<?php
session_start();
require "classes/Blackjack.php";

//check if there is a player session
if (!isset($_SESSION['player'])){
    $player = new Blackjack();
    $dealer = new Blackjack();

    $_SESSION['player'] = serialize($player);
    $_SESSION['dealer'] = serialize($dealer);
} else {
    $player = unserialize($_SESSION['player']);
    $dealer = unserialize($_SESSION['dealer']);
}

//reset the game
if (isset($_POST['reset'])){
    session_destroy();
    header('Location: game.php');
}

//if score is null and there is a player show 2 cards
if ($player->score == null && $player->turn == true){
    for ($i = 0; $i < 2; $i++){
        //show  2 cards
        $player->hit();
    }
    $_SESSION['player'] = serialize($player);
}

//get another card when player hits
if (isset($_POST['hit'])){
    $player->hit();
    $_SESSION['player'] = serialize($player);
}

//stop players turn en switch to dealer
if (isset($_POST['stand'])){
    $player->stand();

    //if dealer score is under 15 give a card
    while($dealer->score < 15){
        $dealer->hit();
    }
    $_SESSION['dealer'] = serialize($dealer);
    //stop dealer turn
    $dealer->stand();
}

//end the game
if (isset($_POST['surrender'])){
    $_SESSION['message'] = "Quitter";

    while($dealer->score < 15){
        $dealer->hit();
    }
    $_SESSION['dealer'] = serialize($dealer);
}

//compare scores
if ($player->score > 21){
    $_SESSION['message'] = "<h3 class='lose'>You lose!</h3>";
} elseif ($dealer->score > 21){
    $_SESSION['message'] = "<h3  class='win'>You won!</h3>";
} elseif ($player->turn == false && $dealer->turn == false){
    if ($player->score < $dealer->score){
        $_SESSION['message'] = "<h3 class='lose'>You lose!</h3>";
    } elseif($player->score > $dealer->score){
        $_SESSION['message'] = "<h3 class='win'>You won!</h3>";
    } else {
        $_SESSION['message'] = "<h3 class='lose'>Tie, dealer wins</h3>";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <title>Blackjack</title>
    <style>

    </style>
</head>
<body>
<div class="container">
    <h1>Blackjack</h1>
    <div class="info">
        <?php foreach ($player->card as $card){
            echo "<p>" . $card . "</p>";
        } ?>
    </div>
    <p><?php echo "Player: " . $player->score ?></p>
    <div class="info">
        <?php foreach ($dealer->card as $card){
            echo "<p>" . $card . "</p>";
        } ?>
    </div>
    <p><?php echo "Dealer: " . $dealer->score ?></p>


    <p><?php if (!empty($_SESSION['message'])){
            echo $_SESSION['message'];
        } ?></p>

    <form action="" method="POST">
        <input type="submit" name="hit" value="Hit" class="hit">
        <input type="submit" name="stand" value="Stand" class="stand">
        <input type="submit" name="surrender" value="Surrender" class="surrender">
    </form>
    <form action="" method="POST">
        <button type="submit" name="reset" class="reset">
    </form>
</div>


</body>
</html>
