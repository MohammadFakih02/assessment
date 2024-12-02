<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers($id=null){
        if($id){
            $user=User::find($id);
            return response()->json(["user"=>$user],200);
        }
        $user=User::all();
        return response()->json(["users"=>$user],200);
    }
    public function updateUsers(Request $request,$id){
        $user = User::find($id)->update([
            "name"=> $request->name,
            "password"=> $request->password,
        ]);
    }

    public function deleteUsers($id){
        $user=User::find($id)->delete();
        return response()->json(["deleted_user"=>$user],200);
    }
}
