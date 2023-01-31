<?php

namespace App\Http\Controllers;

use App\Models\apitest;
use App\Models\TestModel;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function show(){
         $data=TestModel::all();
         return response($data);
    }

    public function Post(Request $request){

         return TestModel::create([
            'isim'=>'api',
             'soyisim'=>'yükleme',
             'adres'=>'adres',
             'telefon'=>'telefon'

         ]);

    }
    public function update($id){
        return TestModel::where('id',$id)->update([
           'isim'=>'isim değişti',
           'soyisim'=>'soyisim değişti',
           'adres'=>'adres değişti',
            'telefon'=>'telefon değişti'
        ]);

    }

    public function delete($id){

       return TestModel::where('id',$id)->delete();
    }
}
