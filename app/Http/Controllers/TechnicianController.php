<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Participants;
use DB;
class TechnicianController extends Controller
{
    public function all_technician(){
      return view('alltechnician');
    }

    public function preenlistment(){
      return view('preenlistment');
    }
    public function trainingindex(){
      $events = Event::where('id','=',1)->get()->first();
      return view('trainingindex', compact('events'));
    }
    public function techniciandirectory(){
      return view('techniciandirectory');
    }
    public function import(){
      return view('import');
    }
    public function export(){
      return view('export');
    }
    public function competence(){
      return view('competence');
    }
    public function add_technician(){
      return view('add_technician');
    }
    public function add_technician_directory(){
      return view('add_technician_directory');
    }

    public function view_participants_modal(){
      $participants_id = $_REQUEST['clicked_id'];
      //$events = Event::with('participants')->where('event_start_date','=',$participants_id)->get();


      $event_participants = DB::table('events')
                             ->join('participants','events.id','=','participants.training_id')
                             ->where('event_start_date','=',$participants_id)
                             ->get();


      foreach ($event_participants as $event) {
         //print_r($event);
        $no = $event->id;
        $region = $event->region;
        $city = $event->city;
        $store_name = $event->store_name;
        $store_address = $event->store_address;
        $lastname = $event->lastname;
        $firstname = $event->firstname;
        $middle_initial = $event->middle_initial;
        $attendance = $event->attendance;

        echo "<td>". $no ."</td>";
        echo "<td>". $region ."</td>";
        echo "<td>". $city ."</td>";
        echo "<td>". $store_name ."</td>";
        echo "<td>". $store_address ."</td>";
        echo "<td>". $lastname ."</td>";
        echo "<td>". $firstname ."</td>";
        echo "<td>". $middle_initial ."</td>";
        echo "<td>". $attendance ."</td>";


      }



    }

    public function enroll_technician($id){
      $events = Event::where('event_start_date','=',$id)->get()->first();
      return view('enroll_technician', compact('events'));
    }

}
