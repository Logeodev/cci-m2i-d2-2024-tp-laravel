<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AssocierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->render("index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->render("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        \DB::table('users')->insert(
            ['name' => $_POST['name'], 'email' => $_POST['email'], 'password' => $_POST['password']]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $asso = User::find( $id );
        $this->render("user", ['user' => $asso]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $r = User::where('id', $id)->delete();
    }

    public function render(string $viewName, array $data = [])
    {
        return view('associer.' . $viewName, $data);
    }
}
