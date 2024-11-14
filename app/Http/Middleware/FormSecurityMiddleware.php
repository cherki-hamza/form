<?php

namespace App\Http\Middleware;

use App\Project;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FormSecurityMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $project =  Project::where('id',$request->project_id)->with('client','products','company')->first();


        if($project->status == 1){
            return redirect()->route('form_done',['project_id'=> $project->id , 'client_name' => $project->client->full_name]);
        }

        return $next($request);
    }
}
