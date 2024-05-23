<?php

namespace App\Http\Controllers\api;

use App\Models\Product;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{
    //
    function index(){
        $products = Students::all();
        if($products->isNotEmpty()){
            return response()->json(['data' => $products], 200);
        } else {
            return response()->json(['data' => 'No existen Students'], 404);
        }
    }

    function show($id){
        $product = Students::find($id);
        if($product){
            return response()->json(['data' => $product], 200, [], JSON_UNESCAPED_UNICODE);
        } else {
            return response()->json(['data' => 'Students no existe'], 404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function store(Request $request){
        $request->validate([
            'id' => 'required',
            'name' => 'required|string',
            'email' => 'required|string',
            'birthDate' => 'required',
            'course_id' => 'required'
        ]);

        $maxId = Students::max('id');

        $StudentData = [
            'id' => $maxId + 1,
            'name' => $request->name,
            'email' => $request->email,
            'birthDate' => $request->birthDate,
            'course_id' => $request->course_id,

        ];

        try{
            Students::create($StudentData);
            return response()->json(['data' => 'Students insertado correctamente'], 200, [], JSON_UNESCAPED_UNICODE);
        }
        catch(\Exception $e){
            if($e->getCode() == 23000) return response()->json(['data' => 'Students ya existe'], 404, [], JSON_UNESCAPED_UNICODE);
            return response()->json(['data' => 'Error al insertar el Students'], 404, [], JSON_UNESCAPED_UNICODE);
        }
    }
    function update(Request $request, $id){
        $students = Students::find($id);

        if($students){
            try{
                $students->update($request->all());
                return response()->json(['data' => 'Students actualizado correctamente'], 200, [], JSON_UNESCAPED_UNICODE);
            }
            catch(\Exception $e){
                if($e->getCode() == 23000) return response()->json(['data' => 'Error al actualizar el Students'], 404, [], JSON_UNESCAPED_UNICODE);
                return response()->json(['data' => 'Error al actualizar el Students'], 404, [], JSON_UNESCAPED_UNICODE);
            }

        }

    }

    function destroy($id){
        try{
            $deleted = Students::where('id', $id)->delete();
            Students::where('id', '>', $id)->update(['id' => DB::raw('id - 1')]);;

            if($deleted) {
                return response()->json(['data' => 'Students eliminado con éxito'], 200, [], JSON_UNESCAPED_UNICODE);
            } else {
                return response()->json(['data' => 'Error al eliminar el Students'], 404, [], JSON_UNESCAPED_UNICODE);
            }
        }
        catch(\Exception $e){
            return response()->json(['data' => 'Error al eliminar el Students'], 404, [], JSON_UNESCAPED_UNICODE);
        }

    }
}
