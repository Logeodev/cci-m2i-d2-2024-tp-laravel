<?php

namespace App\Http\Controllers;

// use Symfony\Component\HttpKernel\Controller\ControllerResolver as Controller;

include_once 'vendor/autoload.php';

class AssocierControlleurs extends Controller {

    function index() {
        echo $this->rendu('index');
    }

    function create() {
        echo $this->rendu('associer.create');
        }

    function store() {
        \DB::table('users')->insert(
            ['name' => $_POST['name'], 'email' => $_POST['email'], 'password' => $_POST['password']]
        );
        }

    function show() {
    $id = $_GET['id'];
    $asso = \DB::table('users')->whereRaw('id = '.$id)->get();
    $this->rendu($asso->first());
    }

    function destroy() {
            $id = $_GET['id'];
            $r = \DB::table('users')->whereRaw('id = '.$id)->delete($id);
            if ($r) {
                $this->index();
            } else {
                echo 'Erreur';
            }

        }

    function rendu($vueName = '') {
        echo view('associer.'.$vueName);
        }

    function test($var) {
        // var_dump(
        // $var);
    }
}