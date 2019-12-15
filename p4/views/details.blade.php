@extends('templates.master')

@section('title')
    Game details
@endsection

@section('content')
<?php
$options = ['rock','paper', 'scissors' ];
$results = ['both','Player A', 'Player B' ];
?>
<h2>Game details</h2> 
    <ul>
        <li>Player A chooses <?php echo $options[$details['playerchoice']]; ?></li>
        <li>Player B chooses <?php echo $options[$details['computerchoice']]; ?></li>
        <li>The winner is <?php echo $results[$details['winner']]; ?></li>
    </ul>

@endsection