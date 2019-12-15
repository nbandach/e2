<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {
        $showresults=$this->app->old('showresults',null);
        return $this->app->view('index', ['showresults'=>$showresults]);
    }

    public function saveNewGame () {
        $options = ['rock','paper', 'scissors' ];
        $playerAmove = intval($this->app->input('choice'));
        $playerBmove = rand(0,2);
        $winner = 0;

        if($playerAmove == 0 and $playerBmove == 1) {
            $winner = 2;
        } else if ($playerAmove == 0 and $playerBmove == 2) {
            $winner = 1; 
        }  else if ($playerAmove == 2 and $playerBmove == 1) {
            $winner = 1;
        } else if($playerAmove == 1 and $playerBmove == 0) {
            $winner = 1;
        } else if ($playerAmove == 2 and $playerBmove == 0) {
            $winner = 2; 
        } else if($playerAmove == 1 and $playerBmove == 2) {
            $winner = 2;
        }

        $data = [
            'playerchoice' => $playerAmove,
            'computerchoice' => $playerBmove,
            'winner' => $winner

        ];


        $this->app->db()->insert('rounds',$data);
        $this->app->redirect('/', ['showresults' => "You chose ".$options[$playerAmove]. " and the bot chose ".$options[$playerBmove]. ", so you " .($winner==1?"won":($winner==2?"lost":"tied"))."!"]);
    }

    public function history () {
        $history = $this->app->db()->all('rounds');
        return $this->app->view('history', ['history' => $history]);
    }

    public function details () {
        $detailsId = $this->app->param('id');
        $details = $this->app->db()->findById('rounds', $detailsId);
        return $this->app->view('details',['details' => $details]);
    }
}
