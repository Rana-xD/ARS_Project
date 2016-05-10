<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
use Mail;
use Illuminate\Contracts\Filesystem\Filesystem;
use File;

class PostsController extends Controller
{
    public function create() {
    	return View::make('posts.create');
    }
    public function posts() {
    	return view ('Registration');
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

    }
    public function test(Filesystem $filesystem) {
        $file = $filesystem->put('license/hello.txt','');
        unlink(base_path('hello.txt'));
        return 'Done';
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
