<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Test2 extends Controller{

 public function start(){
   $rating = controller();
    return 'testing is alread done';
    
 }

 public function sortByName(){

   return 'my branch name is test_2';
 }


 public function testBranchIncorporated(){
   
   return 'this changes was made only for master branch';

 }

 public function testUser(Request $request){
 
   $user = User::all();
   

   return Response()->Json(['messege'=> 'mashauri testing', $user, 200]);

 }
}
