<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Toastr;
use App\User;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function updateProfile(){
        $user = Auth::user();
        return view('admin.user.profile', compact('user'));
    }

    public function save($id ,Request $rq){
        $data = User::find($id);
        $name = $rq->input('user-name');
            if ($name != null) $data ->username=$name;
        $data->gender = $rq->input('gender');
        $email = $rq->input('email');
            if ($email != null) $data ->email=$email;
        $phone_number = $rq->input('phone_number');
            if ($phone_number != null) $data ->phone_number=$phone_number;
        $data->save();
        Toastr::success('Edit successful user', $title = null, $options = []);
        return redirect('administrator');
    }

    public function chagepass(){

        return view('admin.user.changepassword');
    }

    public function savepass(request $rq)
        {
            $this->validate($rq,
            [
                'oldpassword' => 'required',
                'repassword' => 'required|same:newpassword',
                'newpassword' => 'required|string|min:6',
                'repassword' => 'required|same:newpassword',
            ],
            [
                'oldpassword.required' => 'Please enter old password',
                'newpassword.min' => 'Passwords are at least 6 characters long',
                'newpassword.required' => 'Please enter new password',
                'repassword.required' => 'Please confirm password',
                'repassword.same' => 'Password is not the same',
            ]
        );
            $user = Auth::user();
            if(Hash::check($rq ->input('oldpassword'), Auth::user() ->password )){
                $user ->password = bcrypt($rq ->input('newpassword'));
                $user->save();
                return redirect('administrator');
            }
            if(!(Hash::check($rq ->input('oldpassword'), Auth::user() ->password ))){
                $errors = new MessageBag(['oldpassword' => ['Old password is incorrect']]);
                return back()->withErrors($errors)->withInput();
            }
            else
                return back();
        }
}
