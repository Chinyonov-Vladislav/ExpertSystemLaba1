<?php

namespace App\Http\Controllers;

use App\Models\MachineOutput;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class ShowingGraphController extends Controller
{
    public function showGraph()
    {
        try {
            $first_question_node = DB::table('machine_outputs')
                ->join("questions",'machine_outputs.id_question','=','questions.id')
                ->select("machine_outputs.id_question", "questions.text_question as current_text_question")
                ->first();
            $graphData = $this->getGraphDataRecursive($first_question_node);
            return view('pages/ShowingGraphPage', compact("graphData"));
        }
        catch (\Exception $exception )
        {
            logger($exception);
            return redirect('/error/'.$exception->getMessage());
        }
    }
    private function getGraphDataRecursive($node): object
    {
        $data = new stdClass();
        $data->id = $node->id_question;
        $data->text = $node->current_text_question;
        if (property_exists($node, 'property_name')) {
            $data->mark = $node->mark;
        }
        else
        {
            $data->mark ="В".$node->id_question;
        }
        $data->children = array();
        /*$data = array(
            'id' => $node->id_question,
            'text' => $node->current_text_question,
            // Добавьте другие поля, если нужно
            'children' => array()
        );*/
        $childrens = DB::table('machine_outputs')
            ->join('questions as q1','machine_outputs.id_question','=','q1.id')
            ->join("answers",'machine_outputs.id_answer','=','answers.id')
            ->leftJoin("questions as q2",'machine_outputs.id_next_question','=','q2.id')
            ->leftJoin("results",'machine_outputs.id_result','=','results.id')
            ->select("machine_outputs.id_question",'machine_outputs.id_answer','machine_outputs.id_next_question','machine_outputs.id_result',"q1.text_question as current_text_question",'answers.text_answer','q2.text_question as next_text_question','results.text_result')
            ->where("id_question",'=',$node->id_question)
            ->get();
        foreach ($childrens as $child)
        {
            logger(json_encode($child));
            if ($child->id_next_question)
            {
                $childData = new stdClass();
                $childData->id_question = $child->id_next_question;
                $childData->current_text_question = $child->next_text_question;
                $childData->mark = "В".$child->id_result;
                $childData->children = array();
                //$data->children[] = $childData;
                $data->children[] = $this->getGraphDataRecursive($childData);
                //$this->getGraphDataRecursive($childData);
            }
            else if ($child->id_result)
            {
                $resultData = new stdClass();
                $resultData->id = $child->id_result;
                $resultData->text = $child->text_result;
                $resultData->mark = "Р".$child->id_result;
                //$resultData->children = array();
                $data->children[] = $resultData;
            }
        }
        return $data;
    }
}
