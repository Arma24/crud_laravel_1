<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return view('index', ['users' => $user->all(),
        ]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user, Request $request)
    {
        $user->create([
            'nis' => $request->nis,
            'name' => $request->name,
            'class' => $request->class,
            'gender' => $request->gender,
            'email' => $request->email,
        ]);

        return redirect()
            ->route('data.index');
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
    public function edit(User $datum)
    {
        return view('edit', [
            'user' => $datum
        ]);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $datum, Request $request)
    {
        $datum->update([
            'nis' => $request->nis,
            'name' => $request->name,
            'class' => $request->class,
            'gender' => $request->gender,
            'email' => $request->email,
        ]);

        return redirect()
            ->route('data.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $datum)
    {
        $datum->delete();

        return redirect()
            ->route('data.index');
    }
}
