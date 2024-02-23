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
        $users = User::all();
        return $this->render("index", ["users"=> $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->render("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=> "required|ascii",
            "email"=> "required|email|unique:users,email",
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return $this->render('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $asso = User::find( $id );
        return $this->render("user", ['user' => $asso]);
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
    public function destroy(Request $request)
    {
        // $request->validate([
        //     "id"=>'required|in:users,id'
        // ]);
        $r = User::where('id', $request->id)->delete();
        return $this->index();
    }

    public function render(string $viewName, array $data = [])
    {
        return view('associer.' . $viewName, $data);
    }

    public function admin()
    {
        return $this->render('admin');
    }
    public function adminConnect(Request $request)
    {
        $request->validate([
            'password' => 'alpha_num'
        ]);
        $users = User::all();
        if ($request->password != 'ThePepina67') {
            return $this->index();
        } else {
            return $this->render('index', ["admin" => true, "users"=> $users]);
        }
    }
}
