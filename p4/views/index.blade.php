@extends('templates.master')

@section('title')
    {{ $app->config('app.name')}}
@endsection

@section('content')
    <h1> Rock, paper and scissors game </h1>
    <h2> Instructions </h2>
    <p> Paper, rock and scissors game. 
    In the game, two players randomly choose 
    between rock, paper and scissors. 
    Rock beats scissors, 
    paper beats rock and scissors beat paper. </p>
<form method='POST' action='/save-new-game'>
    <input type='radio' value='0' id='rock' name='choice'>
    <label for='rock'> Rock</label>

    <input type='radio' value='1' id='paper' name='choice'>
    <label for='paper'> Paper</label>

    <input type='radio' value='2' id='scissors' name='choice'>
    <label for='scissors'> Scissors</label>

    <button type='submit'>Choose...</button>

</form> 
<?php
if (isset($showresults)) { 
    echo $showresults;
}
?>
<a href='/history'>Game History</a>

@endsection