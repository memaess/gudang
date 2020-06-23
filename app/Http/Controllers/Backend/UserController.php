<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use File;

class UserController extends Controller
{
    public function index()
    {
        return view('backend.user.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        try {
            $user = User::findOrFail($id);
            return view('backend.user.show', compact('user'));
        } catch (\Exception $e) {
            session()->flash('error', 'Terjadi Kesalahan !');
            return redirect()->back();
        }

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
