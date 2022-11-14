<?php

namespace App\Http\Controllers;

use App\Models\Employers;
use Illuminate\Http\Request;

class EmployersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employers = Employers::latest()->get();

        return view('admin.employers', [
            'employers' => $employers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employer-create');
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
            'name' => ['required', 'string', 'max:30'],
            'phone_number' => ['required']
        ]);
        
        Employers::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number
        ]);

        return redirect()->route('employers.index')->with('message', 'Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employer = Employers::where('id', $id)->first();
        return view('admin.employers-edit', [
            'employer' => $employer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:30'],
            'phone_number' => ['required']
        ]);
        
        Employers::findOrFail($id)->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number
        ]);
        
        return redirect()->route('employers.index')->with('message', 'Successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employers::findOrFail($id)->delete();

        return redirect()->route('employers.index')->with('message', 'Successfully deleted!');
    }
}
