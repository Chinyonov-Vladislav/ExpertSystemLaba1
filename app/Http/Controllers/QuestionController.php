<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function index(Request $request) {
        try {
            $id_question = $request["id_question"];
            $id_answer = $request["id_answer"];
            $id_next_question = DB::table("machine_outputs")
                ->select("id_next_question")
                ->where( [
                    ["id_question","=", $id_question],
                        ["id_answer","=",$id_answer]
                    ])
                ->first();
            $text_help = DB::table('machine_outputs')
                ->join('helps','machine_outputs.id_help',"=","helps.id" )
                ->where( [
                    ["machine_outputs.id_question",'=', $id_question],
                    ["machine_outputs.id_answer",'=', $id_answer]
                ])
                ->select('helps.text_help')->get();
            $id_result = null;
            if ($id_next_question->id_next_question===null) // следующего вопроса нет
            {
                $id_result = DB::table('machine_outputs')
                    ->where([
                        ["id_question","=", $id_question],
                        ["id_answer","=",$id_answer]
                    ])
                    ->select('id_result')->get();
                return response()->json(['isResult'=>true, 'help'=>$text_help, 'id_result'=>$id_result],200);
                //дополнить response
            }
            else
            {
                $next_question = DB::table('questions')
                    ->where('id','=', $id_next_question->id_next_question)
                    ->select('id','text_question')
                    ->get();
                $answers = DB::table('machine_outputs')
                    ->join("answers","machine_outputs.id_answer","=","answers.id")
                    ->where("machine_outputs.id_question","=",$id_next_question->id_next_question)
                    ->select("answers.id","answers.text_answer")->get();
                logger("Пункт №6");
                return response()->json(['isNextQuestion'=>true,'help'=>$text_help, 'next_question'=>$next_question, 'answers_for_next_question'=>$answers],200);
            }

        }
        catch (\Exception $exception )
        {
            logger($exception);
        }
    }
}
