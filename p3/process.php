<?php
session_start();

$winner = null;
$options = ['rock','paper', 'scissors' ];
$playerAmove = $_GET['choice'];
$playerBmove = $options[rand(0,2)];

if($playerAmove == 'rock' and $playerBmove == 'paper') {
    $winner = 'Player B';
} else if ($playerAmove == 'rock' and $playerBmove == 'scissors') {
    $winner = 'Player A'; 
}  else if ($playerAmove == 'scissors' and $playerBmove == 'paper') {
                $winner = 'Player A';
 }  else if ($playerAmove == 'rock' and $playerBmove == 'rock') {
                    $winner = 'Tie';
}  else if ($playerAmove == 'paper' and $playerBmove == 'paper') {
                        $winner = 'Tie';
}  else if ($playerAmove == 'scissors' and $playerBmove == 'scissors') {
                            $winner = 'Tie';
} else if($playerAmove == 'paper' and $playerBmove == 'rock') {
                                $winner = 'Player A';
 } else if ($playerAmove == 'scissors' and $playerBmove == 'rock') {
                                $winner = 'Player B'; 
 } else  {
                                            $winner = 'Player B';
}

$results = [
    'winner' => $winner,
    'playerAmove' => $playerAmove,
    'playerBmove' => $playerBmove  
];

$_SESSION['results'] = $results;
header ('Location: index.php');
