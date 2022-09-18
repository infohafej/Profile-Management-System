<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::latest()->get();
      
        return view('Profiles.index',compact('profiles'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'designation' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'email' => 'required',
            'phone' => 'min:10|max:15',
            'present_address' => 'required',            
            'permanent_address' => 'required',
            'date_of_birth' => 'required',
            'religion' => 'required',
            'image' => 'required',
            'career_objective' => 'required'
        ]);
        //dd($request->file('image'));

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = '/uploads/profile-picture';
            $profilePicture = $request->name . "." . $image->getClientOriginalExtension();
            $image->move(public_path().$destinationPath, $profilePicture); 
            $input['image'] = "$profilePicture";
        }
      
        Profile::create($input);
       
        return redirect()->route('profiles.index')
                        ->with('success','Profile created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return view('profiles.show',compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('Profiles.edit',compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
       
        $request->validate([
            'name' => 'required|max:255',
            'designation' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'email' => 'required',
            'phone' => 'min:10|max:15',
            'gender' => 'required',
            'present_address' => 'required',            
            'permanent_address' => 'required',
            'date_of_birth' => 'required',
            'religion' => 'required',
            'marital_status' => 'required',
            'image' => 'required',
            'career_objective' => 'required'
        ]);
      
        $profile->update($request->all());
      
        return redirect()->route('profiles.index')
                        ->with('success','Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        $Profile->delete();
       
        return redirect()->route('profiles.index')
                        ->with('success','Profile deleted successfully');
    }
}
