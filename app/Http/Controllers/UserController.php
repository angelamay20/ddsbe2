<?php

//the location where you put your UserController.php
namespace App\Http\Controllers;
// library use for controller in Request
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\ApiResponse;
use DB;

//create controller class
class UserController extends Controller{
    use ApiResponse;
    private $request;
    

    //create constructor
    public function __construct(Request $request){
        $this->request =$request;
    }

    public function loginSecurity(){
        return view('login');
    }

    public function getUser($id){
        
        $user = app('db')->select("SELECT * FROM tbluser WHERE id=".$id);
        if($user == null)
        return response()->json('No user found in the database');
        return response()->json($user,200);
    }

    //get all the users
    public function getUsers()
    {
        $users = app('db')-> select("SELECT * FROM tbluser");
        return response()-> json($users, 200);
    }

    //validate user 
    public function userValidation(){

        $username=$_POST['username'];
        $password=$_POST['password'];

        $user = app('db')-> select("SELECT * FROM tbluser WHERE username='$username' and password='$password'");

        if(empty($user)){
            return 'Incorrect Credentials!';
        }
        else{
            return redirect()-> route('dashboard');
        }

    }
    public function dashboard(){
        $id = app('db')->select("SELECT id FROM tbluser");
            $username = app('db')->select("SELECT username FROM tbluser");
            $password = app('db')->select("SELECT password FROM tbluser");
            $data = [
                'id'=>$id,
                'username'=>$username,
                'password'=>$password
            ];
            return view('dashboard')->with($data);
        }

    public function addUsers(Request $request){
        $rules = [
            'username' => 'required | max: 20',
            'password' => 'required | max: 20]'
        ];

        // validating rules
        $this-> validate($this->request, $rules);
        $users = User::create($request->all());
        $users->save();

        if ($users->save()) {
            return $this ->successResponse($users, Response::HTTP_CREATED);
            return redirect()->route('dashboard');
        } else {
        }
    }

    public function updateUser( $id){

        $rules = [
            'username' => 'required | max: 20',
            'password' => 'required | max: 20',
        ];
       
        $this -> validate($this->request , $rules);
        $user =User::find($id);
        
        //if user wishes to change their data but unchange.
        if ($user==null){
            return $this->errorResponse('Change at least one value', 404);
        }

        $user->username = $this->request->username;
        $user->password = $this->request->password;
        $user -> save();
        return redirect()->route('dashboard');
    }

    public function deleteUser($id){
        $user = User::find($id);
        if($user){
            $user->delete();
            return $this->successResponse('Successfully deleted!',200);
        }
        {
            return $this->errorResponse('User ID Does Not Exists', 404);
    }

}
}
?>