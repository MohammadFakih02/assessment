<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function createProject(Request $request){
        $project = Project::create([
            "name"=> $request->name,
            "description"=> $request->description,
        ]);
    }

    public function getProjectwithUsers(){
        $projects=Project::with('users')->get();
        return response()->json(["projects"=>$projects],200);
    }

    public function updateProject(Request $request, $id){
        $project = Project::find($id)->update([
            "name"=> $request->name,
            "description"=> $request->description,
        ]);
        return response()->json(["updated_project"=>$project],200);
    }

    public function getProject($id){
        if($id){
            $project = Project::find($id);
            return response()->json(["project"=>$project],200);
        }
        $project= Project::all();
        return response()->json(["projetcs"=> $project],404);
    }
    public function deleteProject($id){
        $project = Project::find($id)->delete();
        $project->users()->detach();
        return response()->json(["deleted_project"=>$project],200);
    }
}
