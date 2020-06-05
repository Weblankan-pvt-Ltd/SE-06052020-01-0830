<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{

    public function save(Request $request)
    {

        // var_dump($request->password);exit;

        $validate = $request->validate([
            'name' => 'required|string|max:255:min:3',
            'email' => 'required|string|email|max:255|unique:users',
            'contact' => 'required|max:10|min:10',
            'address' => 'required|string',
            'password' => 'required|required_with:confirm_password|same:confirm_password|min:8',
            'confirm_password' => 'required:min:8',
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->address = $request->address;
        $user->password = bcrypt($request->confirm_password);
        $user->save();

        return redirect('/signin');

    }

    public function login(Request $request)
    {

        // var_dump($request->email);exit;

        $validate = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|min:8',
        ]);

        $result = DB::table('users')
            ->where('email', $request->email)
            ->first();

        if (is_null($result)) {

            echo json_encode(['error' => 'Wrong username or password']);
            // return back()->with(['error' => 'Wrong username or password']);
        } else {

            if (Hash::check($request->password, $result->password)) {

                Session::put('session_id', $request->email);

                echo json_encode("ok");
            } else {
                echo json_encode(['error' => 'Wrong username or password']);

            }

        }

    }

    public function loadusers()
    {
        $users = DB::table('users')->get();

        if (!is_null($users)) {

            echo json_encode($users);

        } else {
            echo json_encode("no data");

        }
    }

}