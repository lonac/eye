<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;

use App\College;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
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
    protected $redirectTo = '/home';

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
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'staffid'=>'required|string|max:50',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create( $data, $id)
    {
            $col = College::findOrFail($id);

            //before saving these data to the computer

        //get the college name and the Staffids from the user input data at the registration form

                //collegeName

                //    $college = College::findOrFail('id')

        //get the staff id frm  the college staffids in the collegeIDS



        //now compare the staffid entered by the user to the staffid present in the collegeIDs table



        //if they match, allow me to save the data 



        //after saving my data, chech the StaffID ROLE and allocate me to my page:



        //if the dont match then cancell saving.

            return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'college_id' => $col->id,
            'email' => $data['email'],
            'staffid'=>$data['staffid'],
            'password' => bcrypt($data['password']),
        ]);

        
    }
}
