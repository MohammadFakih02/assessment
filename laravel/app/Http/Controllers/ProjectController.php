<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function createProject(Request $request){
        $project = Project::create([
            "name"=> $request->name,
            "details"=> $request->details,
        ]);
    }

    public function updateProject(Request $request, $id){
        $project = Project::find($id)->update([
            "name"=> $request->name,
            "details"=> $request->details,
        ]);
        return response()->json(["updated_project"=>$project],200);
    }
}
