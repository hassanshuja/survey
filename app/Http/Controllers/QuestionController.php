<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Auth;
use DB;
use App\Question;
use App\User;
use Mail;

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

    public function info($link){ 	
    	
    	$query = DB::table('link_data')->where('link', $link);
      $res = $query->get();

      $all_question = json_decode($res[0]->question_json);

      $questions = Question::whereIn('q_no', $all_question)->get();

      // dd($questions, $all_question);

      return \View::make('questions', compact('questions','link'));
    }

    public function submitAnswer(Request $request) {
      $uri = $request->path();
      $data = $request->all();
      $link = $data['link'];;
      // dd($data);
      unset($data['_token']);
      unset($data['link']);
      $answers = json_encode($data);
      $update_answer = [
        'answer_json' => $answers
      ];
      $linkdatatable = DB::table('link_data')->select('*')->where('link', $link)->get()->first();
      $client_email = User::where('id',$linkdatatable->user_id)->value('email');
      // dd($client_email);
      $query = DB::table('link_data')->where('link', $link)->update($update_answer);
      /* Generate Docs File */
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
        foreach($data as $key => $value) {
          $no = str_replace("_", ".", $key);
          $question = Question::where('q_no', $key)->value('question');
          
          $question = $no . ' ' . $question;
          $question = preg_replace('/\s+/', ' ',$question);
          $question = str_replace("<br>", "\n", $question);
          
          $questionlines = explode("\n", $question);
          for ($i = 0; $i < sizeof($questionlines); $i++) {
            $text = $section->addText($questionlines[$i],array('name'=>'Calibri','size' => 11, 'bold' => true, 'lineHeight' => 1.2, 'spacing' => 1.15));
          }
          $text = $section->addText('<w:br/>',array('name'=>'Calibri','size' => 11));
          $text = $section->addText('Answer', array('name' => 'Calibri', 'size' => 11, 'bold' => true));
          $text = $section->addText('<w:br/>',array('name'=>'Calibri','size' => 11));
          $text = $section->addText($value.'<w:br/>',array('name'=>'Calibri','size' => 11, 'lineHeight' => 1.3, 'spacing' => 1.15));
          $text = $section->addText('<w:br/>',array('name'=>'Calibri','size' => 11));
        }
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('Answer_'.$link.'.docx');
        \Mail::send('emails.attachment', ['title' => 'Title', 'content' => 'Content'], function ($message) use ($link, $client_email)
        {
            $message->from('clientemail@mail.com');
            $message->to($client_email);
            $message->attach(public_path('Answer_'.$link.'.docx'));
        });
        return redirect('/home');
    }

}