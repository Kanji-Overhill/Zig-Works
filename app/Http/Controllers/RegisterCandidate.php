<?php

namespace App\Http\Controllers;
use App\Models\Candidates;

use Illuminate\Http\Request;

class RegisterCandidate extends Controller
{
    public function insert(Request $request){
        return Candidates::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
