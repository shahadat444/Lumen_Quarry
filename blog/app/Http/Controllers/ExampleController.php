<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExampleController extends Controller
{

    public function insertData(Request $request){
      $name=  $request->input("name");
        $model= $request->input("model");
        $price = $request->input("price");
    $Description = $request->input("description");
       $SQL= "INSERT INTO `mobile`(`name`, `model`, `price`, `description`) VALUES (?,?,?,?)";
            $result=DB::insert($SQL, [$name,$model,$price,$Description]);

            if($result==true){
                    return "Insert success";

            }
            else{
                return "Insert Fail";
            }

    }





}
