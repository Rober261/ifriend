<?php 
  namespace Dsw\Ifriend\Controllers;

  require_once ('../src/connection.php');
  

use Dsw\Ifriend\models\Party;
use Dsw\Ifriend\models\Assignment;
use Dsw\Ifriend\models\User;

class partyController
{
public function index(){
  //$parties = Party::all();
  $parties = Party::where('admin_id',$_SESSION['id'])->get();
  global $blade;
  echo $blade->view()->make('party.list',compact('parties'))->render();
}

public function show($param){
  $id = $param['id'];
  $parties = Assignment::where('party_id',$id)->get();
  $users = User::all();
  global $blade;
  echo $blade->view()->make('party.show',compact('parties','users'))->render();
}

public function store(){
  $party = new Party;
    $party->name = $_POST['name'];
    $party->admin_id = $_SESSION['id'];
    $party->save();
    $participants = $_POST['participants'];
    shuffle($participants);
    for($i=0; $i<count($participants); $i++) {
      $assignment = new Assignment;
      $assignment->party_id = $party->id;
      $assignment->user_from = $participants[$i];
      $assignment->user_to = $participants[($i+1) % count($participants)];
      $assignment->save();
    }
    header('Location: /party');
}

public function create() {
  $users = \Dsw\Ifriend\models\User::all();
  global $blade;
  echo $blade->view()->make('party.create', compact('users'))->render();
}
}
?>