<?php
public function addProject(Request $request)
{
    $project = new Project();
    $project->title = $request->title;
    $project->description = $request->description;
    $project->link = $request->link;
    $project->save();

    return redirect()->route('projects');
}