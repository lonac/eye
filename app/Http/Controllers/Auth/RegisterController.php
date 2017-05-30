<?php

namespace App\Http\Controllers\Auth;
use App\College;
use App\Collegestaffids;
use App\User;
use Illuminate\Http\Request;
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
    protected function create($id, $data)
    {

            $col = College::findOrFail($id);   //worked
            //make the validation of the staffids from the feeder to the table


            //get the college id

             $colid = $col->first();    //worked


            //get the stuffids of the above college from database table

          /*   $colstaffid = $colid->collegestaffids; //worked

             //get the IDS from the above collegeid

                $lstids = Collegestaffids::with('staffids')->where('id','colstaffid')->get();
                

            //get the stuffid entered by the user

             $enterdstuffid = $data['staffid']; //worked

            //make comparision between the two staffids

             foreach ($colstaffid as $key => $stafid {
                 
                 if ($stafid->staffids==$enterdstuffid) {
                     echo "staffidds matched";
                 } else{
                     echo "ids does not match";
                 }
             }  */


            //if matches allow me to save the data


           //if does not match drop me down
            
           return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'college_id'=> $colid->id,
            'staffid'=>$data['staffid'],
            'password' => bcrypt($data['password']),
            
        ]);  
        
    }
}
