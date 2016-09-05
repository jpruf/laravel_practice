<?php
namespace App\Http\Controllers;
use \Illuminate\Http\Request;
use App\Fruit;
use App\FruitLog;
use DB;

class FruitController extends Controller{
    
    public function getHome(){
        $fruits = Fruit::orderBy('taste', 'desc')
            ->get();
        $logged_fruits = FruitLog::paginate(5);
        
        return view('home', ['fruits'=>$fruits, 'logged_fruits'=>$logged_fruits]);

    }
    
    public function getFruit($fruit, $name = null){
        if ($name === null){
            $name = 'you';
        }
        $fruit = Fruit::where('name', $fruit)->first();
        $fruit_log = new FruitLog();
        $fruit->logged_fruits()->save($fruit_log);
        return view('fruit/fruitpg',['fruit'=>$fruit, 'name'=>$name]);
    }
    
    
    public function postInsertFruit (Request $request){
        console.log($request);
        $this->validate($request, [
            'name'=>'required|alpha|unique:fruits',
            'taste'=>'required|numeric'
            ]);
           
        if ($request->ajax()){

            return response()->json();
        } 
        $fruit = new Fruit();
        $fruit->name = ucfirst(strtolower($request['name']));
        $fruit->taste = $request['taste'];
        $fruit->save();
        $fruits = Fruit::all();


        return redirect()->route('home');
    }
    private function transformName($name){
        $prefix = 'Your Highness, ';
        return $prefix.strtoupper($name);
    }
}

?>