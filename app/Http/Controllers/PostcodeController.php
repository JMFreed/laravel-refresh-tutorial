<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postcode;
use App\Models\Country;

class PostcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postcodes = Postcode::orderBy('name', 'asc')->paginate(5);
        return view('postcodes.index')->with('postcodes', $postcodes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = $this->getCountries();
        return view('postcodes.create')->with('countries', $countries);
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
            'country_id' => 'required'
        ]);

        // process the data and submit it
        $postcode = new Postcode();
        $postcode->name = $request->name;
        $postcode->country_id = $request->country_id;

        // if successful we want to redirect
        if ($postcode->save())
        {
            return redirect()->route('postcodes.index');
        }
        else
        {
            return redirect()->route('postcodes.create');
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
        $postcode = Postcode::findOrFail($id);
        return view('postcodes.show')->with('postcode', $postcode);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postcode = Postcode::findOrFail($id);
        $countries = $this->getCountries();

        return view('postcodes.edit')->with([
            'countries' => $countries, 
            'postcode' => $postcode
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
        // validate the form data
        $this->validate($request, [
            'name' => 'required|max:255',
            'country_id' => 'required'
        ]);

        $postcode = Postcode::findOrFail($id);
        $postcode->name = $request->name;
        $postcode->country_id = $request->country_id;

        // if successful we want to redirect
        if ($postcode->update())
        {
            return redirect()->route('postcodes.index');
        }
        else
        {
            return redirect()->route('postcodes.edit');
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
        $postcode = Postcode::findOrFail($id);
        $postcode->delete();
        return redirect()->route('postcodes.index');
    }

    public function getCountries()
    {
        $countries = Country::all();
        return $countries;
    }
}
