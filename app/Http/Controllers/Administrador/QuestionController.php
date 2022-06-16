<?php

namespace App\Http\Controllers\Administrador;
use App\Http\Controllers\Controller;

use App\Models\Question;
use App\Models\OptionQuestion;

date_default_timezone_set("America/Mexico_City");

class QuestionController extends Controller
{
    //
    public function show(){
        $preguntas = Question::orderBy('id','DESC')->get();

        return view("administrator.sections.dynamic-questions",compact('preguntas'));
    }

    public function addQuestion(){
        $fecha =  date("Y-m-d H:i:s");

        $Question            = new Question();
        $Question->titulo    = utf8_encode(request('titulo'));
        $Question->respuesta = utf8_encode(request('respuesta'));
        $Question->fecha     = $fecha;
        $Question->save();


        if($Question){
            $pregunta = Question::orderBy('id','DESC')->first();

            $opciones = explode(',',request('opciones'));
            //dd($opciones);
            foreach($opciones as $v => $items){
                $OptionQuestion            = new OptionQuestion();
                $OptionQuestion->id_question    = $pregunta->id;
                $OptionQuestion->opcion = utf8_encode($items);
                $OptionQuestion->orden = $v;
                $OptionQuestion->save();
            }

            return response()->json(['data' => 'ok']);
        }else{
            return response()->json(['data' => 'error']);
        }

        

        
    }
    
    
}
