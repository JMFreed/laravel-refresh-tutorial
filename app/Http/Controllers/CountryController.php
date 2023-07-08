<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::orderBy('name', 'asc')->paginate(5);
        return view('countries.index')->with('countries', $countries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the form data
        $this->validate($request, [
            'name' => 'required|max:255',
            'abbreviation' => 'required|max:3'
        ]);

        // process the data and submit it
        $country = new Country();
        $country->name = $request->name;
        $country->abbreviation = $request->abbreviation;

        // if successful we want to redirect
        if ($country->save())
        {
            return redirect()->route('countries.index');
        }
        else
        {
            return redirect()->route('countries.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $country = Country::findOrFail($id);
        return view('countries.show')->with('country', $country);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = Country::findOrFail($id);
        return view('countries.edit')->with('country', $country);
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
        // validate the form data
        $this->validate($request, [
            'name' => 'required|max:255',
            'abbreviation' => 'required|max:3'
        ]);

        $country = Country::findOrFail($id);
        $country->name = $request->name;
        $country->abbreviation = $request->abbreviation;

        // if successful we want to redirect
        if ($country->update())
        {
            return redirect()->route('countries.index');
        }
        else
        {
            return redirect()->route('countries.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::findOrFail($id);
        $country->delete();
        return redirect()->route('countries.index');
    }
}
