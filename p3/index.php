<?php require 'index-controller.php'; ?>
<!doctype html>
<html lang= 'en'>
<head>
    <meta chartset='utf-8'>

</head>

<body>
    <h1> Rock, paper and scissors game </h1>
    <h2> Instructions </h2>
    <p> Paper, rock and scissors game. 
    In the game, two players randomly choose 
    between rock, paper and scissors. 
    Rock beats scissors, 
    paper beats rock and scissors beat paper. </p>
<?php if ($showResults) { ?>
    <h2> Results </h2>
    <ul>
        <li>Player A chooses <?php echo $results['playerAmove']; ?></li>
        <li>Player B chooses <?php echo $results['playerBmove'] ; ?></li>
        <li>The winner is <?php echo $results['winner']; ?></li>
    </ul>
<?php } else { ?>
<form method='GET' action='process.php'>
    <input type='radio' value='rock' id='rock' name='choice'>
    <label for='rock'> Rock</label>

    <input type='radio' value='paper' id='paper' name='choice'>
    <label for='paper'> Paper</label>

    <input type='radio' value='scissors' id='scissors' name='choice'>
    <label for='scissors'> Scissors</label>

    <button type='submit'>Choose...</button>

</form> 
<?php
}
?>
</body>
</html>