<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;

class QuestionController extends Controller
{
    public function generateFile(Request $request){

    	//get all post data
    	$post_data = $request->all();
    	$push_question = array();
    	
    	unset($post_data['_token'], $post_data['client_email']);


  		foreach($post_data as $key => $val){
  			$question_no  = explode("check_", $key)[1];
  			array_push($push_question, $question_no);
  		}

  		$json_question = json_encode($push_question);
  		$user_id = Auth::user()->id;
  		$random_link  = str_random(15);
  		$client_email = $request->client_email;

  		$data = array(
  			'user_id' => $user_id,
  			'question_json' => $json_question,
  			'link' => $random_link,
  			'client_email' => $client_email
  		);

  		// dd($data);

  		DB::table('link_data')->insert($data);

  		return redirect()->route( 'successlink' )->with(['link' => $random_link ]);
    }

    public function info(){
    	 dd('hi');
    }

}