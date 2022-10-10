<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    public function indexRegister()
    {
        return view('register');
    }

    public function Register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'surname' => 'required',
            'tc' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return  redirect('/kayit')->withErrors($validator)->withInput();
        } else {
            $degisken = $request->all();
            $user = [
                'name' => $degisken['name'],
                'surname' => $degisken['surname'],
                'tc' => $degisken['tc'],
                'email' => $degisken['email'],
                'password' => Hash::make($degisken['password']),
            ];
            $user = User::create($user);
            return redirect(('/login'));
        }
    }

    public function indexLogin()
    {
        return view('login');
    }
    public function Login (Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if($validator->fails()){
            return redirect('/login')->withErrors($validator)->withInput();
        }else{
          $password=Hash::make($request->password);
          $user=User::where('email',$request->email);
           if($request->email){
              return redirect('/distance');
           }
           else {
              return 'Email veya Şifre yanlış';
           }
        }
    }
    public function indexDistance()
    {
        return view('distance');
    }

    public function Distance(Request $request)
    { 
            $city1 = Cities::where('title', $request->city1)->first();
            $city2 = Cities::where('title', $request->city2)->first();

            $lat1 = $city1->lat;
            $lng1 = $city1->lng;
            $lat2 = $city2->lat;
            $lng2 = $city2->lng;

            $theta = $lng1 - $lng2;
            $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $miles = $dist * 60 * 1.1515;

            $result=($miles * 1.609344);
            return $result;
    }
}
