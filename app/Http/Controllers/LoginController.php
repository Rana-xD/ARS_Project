<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class LoginController extends Controller
{
  public function UserAuthentication(Request $request) {
      $name = $request->name;
      $password = $request->password;
      $password = sha1($password);
      //$result = DB::table('users')->where('name','=',$name)->get();
      $result = DB::table('users')->where('user_name','=',$name)->pluck('password');
      $db_pass = implode("",$result);
      if (strcmp($password,$db_pass)==0) {
        return view('Menu');
      } else {
        $flag=1;
        return view('Login', compact('flag'));
      }
  }
}
?>
