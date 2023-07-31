<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkillResource;
use Inertia\Inertia;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SkillController extends Controller
{

    public function index()
    {
        $skills = SkillResource::collection(Skill::all());
        return Inertia::render('Skills/Index', compact('skills'));
    }

    
    public function create()
    {
        return Inertia::render('Skills/Create');
    }

 
    public function store(Request $request)
    {
         $request->validate([
            'name' => ['required', 'min:3'],
            'image' => ['required', 'image'],
          ]);

          if($request->hasFile('image')){
            $image = $request->file('image')->store('skills');
            Skill::create([
                'name' => $request->name,
                'image' => $image,
            ]);

            return Redirect::route('skills.index');
          }
  
         return Redirect::back();
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
