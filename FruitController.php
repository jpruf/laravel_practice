<?php
namespace App\Http\Controllers;
use \Illuminate\Http\Request;

class FruitController extends Controller{
    public function getFruit($fruit, $name = null){
        return view('fruit/'.$fruit,['name'=>$name]);
    }
    public function postFruit (Request $request){
        $this->validate($request, [
            'fruit'=>'required',
            'name'=>'required|alpha'
            ]);
            return view('fruit/fruitpg', ['name' => $this->transformName($request['name']), 'fruit' => $request['fruit']]);    
            }

    private function transformName($name){
        $prefix = 'Your Highness, ';
        return $prefix.strtoupper($name);
    }
}

?>