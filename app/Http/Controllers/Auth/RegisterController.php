<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Doctor;
use App\Chamber;
use App\Http\Controllers\Controller;
use App\Laboratory;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\Environment\Console;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::DASHBOARD;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'type' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // dd($data);
        $user =  User::create([
            'type' => $data['type'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        if ($user->type == 2) {
            // $doctor = new Doctor([
            Doctor::create([
                'user_id' => $user->id,
                'gender' => $data['gender'],
                'dob' => $data['dob'],
                'phone' => $data['phone'],
                'registration_no' => $data['registration_no'],
                'aadhar_no' => $data['aadhar_no'],
                'pan_no' => $data['pan_no'],
                'city' => $data['city'],
                'state' => $data['state'],
                'country' => $data['country'],
                'latitude' => $data['latitude'],
                'longitude' => $data['longitude'],
                'about_me' => $data['about_me'],
            ]);

            Chamber::create([
                'user_id' => $user->id,
            ]);
        }

        if ($user->type == 4) {
            // $doctor = new Doctor([
            Laboratory::create([
                'user_id' => $user->id,
                'lab_name' => $data['lab_name'],
                'reg_no' => $data['reg_no'],
                'lab_contact_person' => $data['lab_contact_person'],
                'lab_contact_no' => $data['lab_contact_no'],
                'lab_contact_no2' => $data['lab_contact_no2'],
                'city' => $data['city'],
                'state' => $data['state'],
                'country' => $data['country'],
                'latitude' => $data['latitude'],
                'longitude' => $data['longitude'],
                'lab_open_time' => $data['lab_open_time'],
                'lab_close_time' => $data['lab_close_time'],
                'full_close_day' => $data['full_close_day'],
                'pan_no' => $data['pan_no'],
                'gst_no' => $data['gst_no'],
                'details' => $data['details'],
            ]);
        }

        return $user;
    }
}
