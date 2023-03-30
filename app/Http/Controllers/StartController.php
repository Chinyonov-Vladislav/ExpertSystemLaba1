<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StartController extends Controller
{
    public function index() {
        try {
            $start_question = DB::table('questions')->select('id',"text_question")->orderBy("id","asc")->first();
            logger($start_question->id);
            $answers = DB::table('machine_outputs')
                ->join("answers","machine_outputs.id_answer","=","answers.id")
                ->where("machine_outputs.id_question","=",$start_question->id)
                ->select("answers.id","answers.text_answer")->get();
            $text_help = null;
            return view('pages/StartQuestionPage', compact('start_question', "answers", 'text_help'));
        }
        catch (\Exception $exception)
        {
            logger($exception);

        }
    }
}
