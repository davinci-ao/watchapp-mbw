<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Kreait\Firebase\Database;


class adminController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = '11';
    }

    public function adminPage()
    {
//        $Users = User::all();

        $Users = $this->database->getReference($this->tablename)->getValue();

//        dd($Users);

        return view('adminPage', compact('Users'));
    }

    public function addAdmin($id){

        $u = User::find($id);
        if ($u != null) {
            $u->addRole('admin');
        }
        else{
             return response('User does noet exist', 200);
        }

        return view('dashboard')->with('info', 'User admin gemaakt.');
    }

    public function removeAdmin($id){



        $u = User::find($id);



        if ($u != null) {
            $u->revokeRole('admin');
        }





        return view('dashboard');
    }
}
