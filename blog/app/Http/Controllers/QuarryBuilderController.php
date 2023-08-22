<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QuarryBuilderController extends Controller
{
        public function Retrive(Request $request){
            $request = DB::table('mobile')->get();
            $request = DB::table('mobile')->select("name","model")->get();
            return $request;
        }

            //Aggregates

         public function max(Request $request){
            $request = DB::table('mobile')->max('price');
                return $request;
         }


         public function min(Request $request){
            $request = DB::table('mobile')->min('price');

                    return $request;
         }

         public function count(Request $request){
            $request = DB::table('mobile')->count();
            return $request;

         }

         public function Avg(Request $request){

            $request = DB::table('mobile')->avg('price');
          return $request;


         }

         //Qurry_Insert

        public function InsertData(Request $request){
               $nv= $request->input("name");
              $mv=  $request->input("model");
               $pv= $request->input("price");
               $dv= $request->input("description");

               $sql= "INSERT INTO `mobile`(`name`, `model`, `price`, `description`) VALUES (?,?,?,?)";
                $result= DB::insert($sql,[$nv,$mv,$pv,$dv]);

                if($result==true) {

                    return "insert done";
                }
                else{

                    return "insert fail";

                }
        }
                //Quarry Update

                public function updateData(Request $request){
                    $nv= $request->input("name");
                   $mv=  $request->input("model");
                    $pv= $request->input("price");
                    $dv= $request->input("description");

                    $sql= "UPDATE `mobile` SET `name`=?,`model`=?,`price`=?,`description`=? WHERE `id`='6' ";
                     $result= DB::update($sql,[$nv,$mv,$pv,$dv]);

                     if($result==true) {

                         return "update  done";
                     }
                     else{

                         return "update fail";

                     }
             }

             //Delete Quarry
         public function deleteData(Request $request){
                $iv= $request->input("id");
                $sql= "DELETE FROM `mobile` WHERE `id`=? ";
                     $result= DB::update($sql,[$iv]);

                     if($result==true) {
                        return "Delete  done";
                    }
                    else{

                        return "Delete fail";

                    }








            }







}
