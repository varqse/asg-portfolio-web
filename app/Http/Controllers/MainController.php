<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\Project;

class MainController extends Controller
{
    // public function profile($username){
    //     $data=DB::table('profile')
    //     ->where('username',$username)
    //     ->first();
    //     return view('profile')->with('data',$data);     
    // }
    
    // public function MyPage($menuname){
    //     return view($menuname);
    // }

    public function VarsPage(){
        $varqse = 'varqse';

        $data = DB::table('vprofile')->where('username', $varqse)->first();

        return view('homepage')->with('data',$data);
    }
    
    public function editProfilePage(){
        $varqse = 'varqse'; // Ganti dengan username yang sesuai
        $data = DB::table('vprofile')->where('username', $varqse)->first();
        return view('edit-profile')->with('data', $data);
    }
    
    public function updateProfile(Request $request){
        $username = $request->input('username');
        $name = $request->input('name');
        $fullname = $request->input('fullname');
        $text = $request->input('text');

    
        // Lakukan validasi data jika diperlukan
    
        // Lakukan update data di database
        DB::table('vprofile')
            ->where('username', $username)
            ->update(['name' => $name, 'fullname' => $fullname, 'text' => $text]);

        $data = DB::table('vprofile')->where('username', $username)->first();
        // Redirect ke halaman profil setelah pembaruan
        return view('homepage')->with('data', $data);
    }
    
    


    // public function ProjectPage(){
    //     return view('projects');
    // }
    public function ProjectPage()
{
    $projects = Project::all();
    return view('projects', compact('projects'));
}

public function addProject(Request $request)
{
    $project = new Project();
    $project->title = $request->title;
    $project->description = $request->description;
    $project->link = $request->link;
    $project->save();

    return redirect()->route('projects');
}

public function deleteProject($id)
{
    Project::destroy($id);
    return redirect()->route('projects');
}




}
