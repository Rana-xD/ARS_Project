<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use DB;

use Mail;

class PostsController extends Controller
{
    public function create() {
    	return View::make('posts.create');
    }
    public function posts() {
    	return view ('registration');
    }
    public function upload(Request $request) {

    	$name = $request->name;
    	$address = $request->address;

    	if (!empty($name) && !empty($address)) {
    		echo "Ookayy";
    		DB::table('post_files')->insert(['name'=>$name, 'address'=>$address]);
    	}

      if ($request->hasFile('file')){
          $file = $request->file('file');
          $file->move('uploads', $file->getClientOriginalName());
          //$flag1 = 1;
      }
      if ($request->hasFile('file1')){
          $file1 = $request->file('file1');
          $file1->move('uploads', $file1->getClientOriginalName());
          //$flag2 = 1;
      }
      if ($request->hasFile('file2')){
          $file2 = $request->file('file2');
          $file2->move('uploads', $file2->getClientOriginalName());
          //$flag3 = 1;
      }


	// Code for files insertion into file server
    // Files are stored in Uploads in project directory

    }
    public function confirm(Request $request) {
      include('image_check.php'); // getExtension Method
      $msg='';
      if($_SERVER['REQUEST_METHOD'] == "POST")
      {
      $name = $_FILES['file']['name'];
      $size = $_FILES['file']['size'];
      $tmp = $_FILES['file']['tmp_name'];
      $ext = getExtension($name);

      if(strlen($name) > 0)
      {
      // File format validation
      if(in_array($ext,$valid_formats))
      {
      // File size validation
      if($size<(1024*1024))
      {
      include('s3_config.php');
      //Rename image name.
      $actual_image_name = time().".".$ext;

      if($s3->putObjectFile($tmp, $bucket , $actual_image_name, S3::ACL_PUBLIC_READ) )
      {
      $msg = "S3 Upload Successful.";
      $s3file='http://'.$bucket.'.s3.amazonaws.com/'.$actual_image_name;
      echo "<img src='$s3file'/>";
      echo 'S3 File URL:'.$s3file;
      }
      else
      $msg = "S3 Upload Fail.";

      }
      else
      $msg = "Image size Max 1 MB";

      }
      else
      $msg = "Invalid file, please upload image file.";

      }
      else
      $msg = "Please select image file.";

      }

    }
    public function home(Request $request) {
        $name = $request->name;
        $password = $request->password;
        $password = sha1($password);
        //$result = DB::table('users')->where('name','=',$name)->get();
        $result = DB::table('users')->where('user_name','=',$name)->pluck('password');
        $db_pass = implode("",$result);
        if (strcmp($password,$db_pass)==0) {
          return view('home');
        } else {
          $flag=1;
          return view('login', compact('flag'));
        }
    }
    public function search() {
        $result = DB::table('post_files')->paginate(10);
        return view('search', ['result' => $result]);
    }
    public function downloadcsv() {
        $result = DB::table('post_files')->get();
        $filename = "search-result.csv";
        $handle = fopen($filename, 'w+');
        fputcsv($handle, array('ID','Name','Address'));
        foreach($result as $item) {
            fputcsv($handle, array($item->id, $item->name, $item->address));
        }
        fclose($handle);
        $headers = array(
            'Content-Type' => 'text/csv',
        );
        return response()->download($filename, 'search-result.csv', $headers);
    }
    public function sendmail() {
      $data = [];
      Mail::send('emails.welcome', $data, function($message){
        $message->to('ranapann1@gmail.com')
                ->subject('Welcome to ARS');
      });
    }
    public function about() {
      return view('about');
    }
}
