<?php

namespace Testable\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Testable\Project;
use Illuminate\Http\Request;
use Testable\Http\Requests\ProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Project::paginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        return Project::create([
            'name' => $request->name,
            'description' => $request->description ?? '',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testable\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return $project;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testable\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
        return Project::whereId($project->id)->update([
            'name' => $request->name,
            'description' => $request->description ?? '',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testable\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        return $project->delete();
    }
}
