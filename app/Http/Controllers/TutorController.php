<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutors = Tutor::all();
        return view('tutors.index', compact('tutors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tutors.create');
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
            'typeDocument'=>'required',
            'documentNumber'=>'required',
            'name'=>'required',
            'secondName'=>'required',
            'lastName'=>'required',
        ]);

        $tutors = new Tutor([
            'nameBuisness'=>$request->get('nameBuisness'),
            'typeDocument'=>$request->get('typeDocument'),
            'documentNumber'=>$request->get('documentNumber'),
            'name'=>$request->get('name'),
            'secondName'=>$request->get('secondName'),
            'lastName'=>$request->get('lastName'),
            'country'=>$request->get('country'),
            'province'=>$request->get('province'),
            'municipy'=>$request->get('municipy'),
            'status'=>$request->get('status'),
            'email'=>$request->get('email'),
            'number'=>$request->get('number')
        ]);

        $tutors->save();
        return redirect('/tutors')->with('success', 'Tutor saved!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tutor = Tutor::find($id);
        return view('tutors.edit', compact('tutor'));
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
            'typeDocument'=>'required',
            'documentNumber'=>'required',
            'name'=>'required',
            'secondName'=>'required',
            'lastName'=>'required',
        ]);

        $tutor = Tutor::find($id);
        $tutor->nameBuisness = $request->get('nameBuisness');
        $tutor->typeDocument = $request->get('typeDocument');
        $tutor->documentNumber = $request->get('documentNumber');
        $tutor->name = $request->get('name');
        $tutor->secondName = $request->get('secondName');
        $tutor->lastName = $request->get('lastName');
        $tutor->name = $request->get('country');
        $tutor->country = $request->get('province');
        $tutor->province = $request->get('municipy');
        $tutor->status = $request->get('status');
        $tutor->email = $request->get('email');
        $tutor->number = $request->get('number');

        $tutor->save();

        return redirect('tutors')->with('success', 'Tutor updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tutor = Tutor::find($id);
        $tutor->delete();

        return redirect('tutors')->with('success', 'Tutor deleted');
    }
}
