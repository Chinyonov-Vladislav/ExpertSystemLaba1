<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    public function index($id) {
        try {
            $text_result = DB::table('results')
                ->where('id','=', $id)
                ->select("text_result")->get();
            $text_help = DB::table('machine_outputs')
                ->join('helps', 'machine_outputs.id_help','=','helps.id')
                ->where("machine_outputs.id_result",'=',$id)
                ->select("helps.text_help")->get();
            return view('pages/ResultPage',compact('text_result','text_help'));
        }
        catch (\Exception $exception)
        {
            logger($exception);

        }
    }
}
