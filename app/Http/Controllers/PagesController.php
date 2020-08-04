<?php

namespace App\Http\Controllers;
use Auth;
use App\User;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PagesController extends Controller
{
    public function index(){
        $title = 'MODERN DIGITAL';
        return view('_particles.landing', compact('title'));
    }

    public function signup(){
        $title = 'SIGN UP';
        return view('_particles.signup')->with('title',$title);
    }
    public function postSignup(Request $request){

        // $data = \Input::except(array('_token'));

        $inputs = $request->all();

        $email = $inputs["email"];
        $firstname = $inputs["firstname"];
        $lastname = $inputs["lastname"];
        $contact_number = $inputs["contact_number"];
        $pass = $inputs["password"];
        $usertype = $inputs["usertype"];


        echo $email . " \n " . $pass;

        $user = new User;
        $user->email = $email;
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->contact_number = $contact_number;
        $user->password = bcrypt($pass);
        $user->usertype = $usertype;


        $user->save();
        
            \Session::flash('flash_message', 'Register successfully...');

            return redirect("/");

    }
    // public function signin(){
    //     $title = 'SIGN IN';
    //     return view('_particles.signin')->with('title',$title);
    // }
    public function signin(){
       if(Auth::check())
       { 
            return redirect('/');
       }
       else
       {
            return view('_particles.signin');

       }

        
    }
    public function postSignin(Request $request)
    {
        
    // echo "hello";
    // exit; 
        
      $this->validate($request, [
            'email' => 'required|email', 'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
         if (Auth::attempt($credentials, $request->has('remember'))) {

          

            if (method_exists($this, 'authenticated')) {
                return $this->authenticated($request, Auth::user());
            }

            
            return redirect('/');
        }

      
       return redirect('/signin')->withErrors('The email or the password is invalid. Please try again.');
      


    }
    public function services(){
        $data = array(
            'title'=> 'Products',
            'services' => ['Moblie & Tablets','Tv','Washing Machine']
        );
        return view('pages.services')->with($data);
    }
}

