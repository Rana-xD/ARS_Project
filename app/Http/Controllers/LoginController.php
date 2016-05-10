<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use Mockery\CountValidator\Exception;

class LoginController extends Controller
{
  public function UserAuthentication(Request $request) {
      DB::beginTransaction();
      try{
          $name = $request->name;
          $password = $request->password;
          $password = sha1($password);
          //$result = DB::table('users')->where('name','=',$name)->get();
          $result = DB::table('users')->where('user_name','=',$name)->pluck('password');
          DB::commit();
          $db_pass = implode("",$result);
          if (strcmp($password,$db_pass)==0) {
              session_start();
              $_SESSION['timestamp'] = time();
              $_SESSION['username'] = $name;

              return redirect('/Menu');

          } else {
              $flag=1;
              return view('/Login', compact('flag'));
          }
      }
      catch (Exception $e)
      {
          DB::rollback();
      }

  }
    public function Menu()
    {
        session_start();
        if(empty($_SESSION['username']))
        {
            return redirect('/');
        }
        else
        {
            $name = $_SESSION['username'];
            return view('Menu',compact('name'));
        }


    }
}
?>
