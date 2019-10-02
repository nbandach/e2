<?php require 'index-controller.php'; ?>
<!doctype html>
<html lang= 'en'>
<head>
    <meta chartset='utf-8'>

</head>

<body>
    <h1> Rock, paper and scissors game </h1>
    <h2> Mechanics </h2>
    <p> Paper, rock and scissors game. 
    In the game, two players randomly choose 
    between rock, paper and scissors. 
    Rock beats scissors, 
    paper beats rock and scissors beat paper. </p>
    <h2> Results </h2>
    <ul>
        <li>Player A chooses <?php echo $playerAmove; ?></li>
        <li>Player B chooses <?php echo $playerBmove; ?></li>
        <li>The winner is <?php echo $winner; ?></li>
    </ul>

</body>
</html>
