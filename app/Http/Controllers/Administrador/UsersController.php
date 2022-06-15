<?php

namespace App\Http\Controllers\Administrador;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
class UsersController extends Controller
{
    //

    public function show(){
    	$usuarios = Admin::orderBy('id','DESC')->get();
    	return view('administrator.users.users',compact('usuarios'));
    }

public function addUsuario(){
    	    $fecha        =  date("Y-m-d H:i:s");

            $tipo_file   =   $_FILES["foto"]["type"];
            $tmp_file    =   $_FILES["foto"]["tmp_name"];
            $name        =   $_FILES["foto"]["name"];
            $directorio  =   'assets-admin/images/administradores/';
            if (!empty($tmp_file)) {
	            $archivo_temporal   = $tmp_file;
	            $size               = GetImageSize("$archivo_temporal");
	            $anchura_real       = $size[0];
	            $altura_real        = $size[1]; 

	            $final = $anchura_real / $altura_real;

	            if ($anchura_real>=48) {
	                $sube_imagen = $this->sube_total($tmp_file, $name, $directorio,$tipo_file);
	            }else{
	                $sube_imagen ="none";
	            }

	            if($sube_imagen!="none"){

	                $user                   = new Admin();
	                $user->nombre           = utf8_encode(request('nombre'));
                    $user->telefono         = request('telefono');
	                $user->email            = utf8_encode(request('email'));
	                $user->password         = Hash::make(request('password'));
	                $user->foto             = $sube_imagen;
	                $user->status           = request('status');
	                $user->fecha            = $fecha;
	                $user->remember_token   = '';
	                $user->save();

        		$users = Admin::all();

	               return response()->json(['data' => 'ok','usuarios' => $users]);
	            }else{
	                return response()->json(['data' => 'error2']);
	            }
	        }else{

                $user                   = new Admin();
                $user->nombre           = utf8_encode(request('nombre'));
                $user->telefono         = request('telefono');
                $user->email            = utf8_encode(request('email'));
                $user->password         = Hash::make(request('password'));
                $user->foto             = "admin.jpg";
                $user->status           = request('status');
                $user->fecha            = $fecha;
                $user->remember_token   = '';
                $user->save();

    			$users = Admin::all();

               	return response()->json(['data' => 'ok','usuarios' => $users]);
	        }

    }

    public function EditUsuario(){

    	$usuario = Admin::where('id','=',request('id'))->first();

    	if ($usuario) {
    		return response()->json(['data' => $usuario]);
    	}else{
    		return response()->json(['data' => "error"]);
    	}
    }
    public function updateUsuario(){



            $tipo_file   =   $_FILES["foto"]["type"];
            $tmp_file    =   $_FILES["foto"]["tmp_name"];
            $name        =   $_FILES["foto"]["name"];
            $directorio  =   'assets-admin/images/administradores/';

            if (!empty($tmp_file)) {
       
            
            $archivo_temporal   = $tmp_file;
            $size               = GetImageSize("$archivo_temporal");
            $anchura_real       = $size[0];
            $altura_real        = $size[1]; 

            $final = $anchura_real / $altura_real;

            if ($anchura_real>=48) {
                $sube_imagen = $this->sube_total($tmp_file, $name, $directorio,$tipo_file);
            }else{
                $sube_imagen ="none";
            }

            if($sube_imagen!="none"){


                if (!empty(request('password'))) {
                    # code...
                    $usuarios = Admin::where('id','=',request('id'))->update(['nombre' => utf8_encode(request('nombre')),'email' =>request('email'),'password' =>Hash::make(request('password')),'telefono' =>utf8_encode(request('telefono')),'foto' =>$sube_imagen,'status' =>utf8_encode(request('status'))]);
                }else{
                    $usuarios = Admin::where('id','=',request('id'))->update(['nombre' => utf8_encode(request('nombre')),'email' =>request('email'),'telefono' =>utf8_encode(request('telefono')),'foto' =>$sube_imagen,'status' =>utf8_encode(request('status'))]);
                }
            }else{

                if (!empty(request('password'))) {
                    # code...
                    $usuarios = Admin::where('id','=',request('id'))->update(['nombre' => utf8_encode(request('nombre')),'email' =>request('email'),'password' =>Hash::make(request('password')),'telefono' =>utf8_encode(request('telefono')),'status' =>utf8_encode(request('status'))]);
                }else{
                    $usuarios = Admin::where('id','=',request('id'))->update(['nombre' => utf8_encode(request('nombre')),'email' =>request('email'),'telefono' =>utf8_encode(request('telefono')),'status' =>utf8_encode(request('status'))]);
                }


            }

        }else{


            if (!empty(request('password'))) {
                # code...
                $usuarios = Admin::where('id','=',request('id'))->update(['nombre' => utf8_encode(request('nombre')),'email' =>request('email'),'password' =>Hash::make(request('password')),'telefono' =>utf8_encode(request('telefono')),'status' =>utf8_encode(request('status'))]);
            }else{
                $usuarios = Admin::where('id','=',request('id'))->update(['nombre' => utf8_encode(request('nombre')),'email' =>request('email'),'telefono' =>utf8_encode(request('telefono')),'status' =>utf8_encode(request('status'))]);
            }

        }


        $users = Admin::all();
            if ($usuarios) {
               return response()->json(['data' => 'ok','usuarios' => $users]);
            }else{
                return response()->json(['data' => 'error']);
            }
    }



    public function deleteUsuario(){


            $users = Admin::where('id','=',request('id'))->delete();
            if ($users) {
               return response()->json(['data' => 'ok']);
            }else{
                return response()->json(['data' => 'error']);
            }

    }

    //la funcion tiene 5 parametros
    private function sube_total($tmp_file, $name, $directorio,$tipo_file){



        if ($tipo_file=='image/jpeg') {
            $original = imagecreatefromjpeg($tmp_file);
        }


        if ($tipo_file=='image/png') {
            $original = imagecreatefrompng($tmp_file);
        }

        if ($tipo_file=='image/gif') {
            $original = imagecreatefromgif($tmp_file);
        }


        $ancho_original = imagesx($original);
        $alto_original = imagesy($original);

        $ancho_nuevo = 48;
        $alto_nuevo = 48;

        $copia = imagecreatetruecolor($ancho_nuevo, $alto_nuevo);


        imagecopyresampled($copia, $original, 0, 0, 0, 0, $ancho_nuevo, $alto_nuevo, $ancho_original, $alto_original);

        $ultimo             = rand(0,1000);
        $archivo_nombre     = $name;
        $trime              = preg_replace( "([     ]+)", "", $archivo_nombre );
     
        $extension= substr($trime,strrpos($trime,'.'));

        if(!empty($name) and $extension !=".php" and $extension !=".js" and $extension !=".sql" and $extension !=".css"){
            
            $sube_imagen = $ultimo."-".$trime;
            /*El 1000-> es de calidad*/
            
            imagejpeg($copia, $directorio.$sube_imagen, 100);
            return $sube_imagen;
        }
        else
            return "none";
    }
}
