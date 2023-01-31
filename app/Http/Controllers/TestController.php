<?php

namespace App\Http\Controllers;

use App\Models\TestModel;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function show(){
         $data=TestModel::all();
         return response($data);
    }

    public function Post(Request $request){
        $validate=$request->validate([
               'name'=>'required',
               'lastname'=>'required'
        ]);
        if($validate) {
            TestModel::create([
                'isim' => $request->name,
                'soyisim' => $request->lastname,
                'adres' => $request->adress,
                'telefon' => $request->number
            ]);
            return response()->json([
                'status' => true,
                'succsess' => 'kayıt işlemi başarılı'
            ]);
        }else{
            return response()->json([
                'status' => false,
                'error' =>'validasyondan geçemedi'
            ]);

        }



        }

    public function update(Request $request,$id){
        try {
            $validate=$request->validate([
                'name'=>'required',
                'lastname'=>'required'
            ]);
            if ($validate) {
                TestModel::where('id', $id)->update([
                    'isim' => $request->name,
                    'soyisim' => $request->lastname,
                    'adres' => $request->adress,
                    'telefon' => $request->number
                ]);
            }else{
                return  response()->json([
                    'status'=>false,
                    'succsess'=>'elsenin içinde'
                ]);
            }

            return  response()->json([
                'status'=>true,
                'succsess'=>'Güncelleme İşlemi başarılı'
            ]);
        }catch (\Throwable $th){
            return response()->json([
                'status'=>false,
                'succsess'=>$th->getMessage()
            ]);
        }


    }
    public function delete($id){
      TestModel::where('id',$id)->delete();
       return  response()->json([
           'status'=>true,
           'succsess'=>'silme işlemi başarılı'
       ]);
    }
}
