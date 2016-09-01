<?php
namespace App\Http\Controllers;
use \Illuminate\Http\Request;

class FruitController extends Controller{
    public function getFruit($fruit, $name = null){
        return view('fruit/'.$fruit,['name'=>$name]);
    }
    public function postFruit (Request $request){
<<<<<<< HEAD
        $this->validate($request, [
            'fruit'=>'required',
            'name'=>'required|alpha'
            ]);
            return view('fruit/fruitpg', ['name' => $this->transformName($request['name']), 'fruit' => $request['fruit']]);    
            }

=======
        if (isset($request['fruit']) && $request['name']){
            if (strlen($request['name'])>0){
            return view('fruit/fruitpg', ['name' => $this->transformName($request['name']), 'fruit' => $request['fruit']]);    
            }
        return redirect()->back();
        }
    return redirect()->back();
    }
>>>>>>> f0169dca169277fba863f84b259db1eac8e910fd
    private function transformName($name){
        $prefix = 'Your Highness, ';
        return $prefix.strtoupper($name);
    }
}

?>