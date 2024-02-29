<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CoursController extends Controller
{




    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        
        return view('courses.index' )->with('cours' ,Cours::orderBy('name')->get());
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        if( Auth::user() && Auth::user()->id ==1)
        {
        return view('courses.create');
         }
         else{

            return view('courses.log');
         }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name'=>'required',
            'description'=>'required',
            'image'=>'required|image|mimes:png,jpg,jpeg |max:2048',
            'corseId'=>'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $path = 'images/';
            $profImage = date('YmdHis'). '.' . $image->getClientOriginalExtension();
            $image->move($path,$profImage);
            $input['image'] =$profImage;
           
        }

            $slug = Str::slug($request->name, '-');
            $input['slug'] =$slug;

            Cours::create($input);

            return redirect()->route('courses.index')
            ->with('success', 'course added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        if( Auth::user())
        {
        //return view('courses.show')->with('cours',Cours::where('id',$id));
        $cours =  Cours::where('slug', $slug)->first();
        return view('courses.show',compact('cours'));
        }
        else{
            return view('courses.log');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $slug)
    {
        if( Auth::user() && Auth::user()->id ==1)
        {
        $cours =  Cours::where('slug', $slug)->first();
        return view('courses.edit' ,compact('cours'));
        }
        else{

            return view('courses.log');
         }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        if( Auth::user() && Auth::user()->id ==1)
        {
        $request->validate([

            'name'=>'required',
            'description'=>'required',
            'corseId'=>'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $path = 'images/';
            $profImage = date('YmdHis'). '.' . $image->getClientOriginalExtension();
            $image->move($path,$profImage);
            $input['image'] =$profImage;
           
        }
        else {
            unset($input['image']);
        }
        
             $cours =  Cours::where('slug', $slug)->first();
             $slug = Str::slug($request->name, '-');
             $input['slug'] =$slug;
             $cours->update($input);

            return redirect()->route('courses.index')
            ->with('success', 'course updated successfully');
    }
    else{

        return view('courses.log');
     }
    }


    public function destroy($slug)
    {
        if( Auth::user() && Auth::user()->id ==1)
        {
        Cours::where('slug',$slug)->delete();

             return redirect()->route('courses.index')
            ->with('success', 'cours deleted successfully');
        }
        else{

            return view('courses.log');
         }
    }

}
