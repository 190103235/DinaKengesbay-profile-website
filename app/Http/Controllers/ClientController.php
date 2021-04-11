<?php

namespace App\Http\Controllers;
use Illuminate\Http\UploadFile;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index() {
        $clients = Client::all();
        return view('index')->with(['clients' => $clients]);
    }

    public function store(Request $request) {
        Client::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'photo' => $request->photo
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename=time() . '.' . $extension;
            $file->move('uploads/client/', $filename);
            $client->photo =$filename;
        }
        else {
            return $request;
            $client->photo = '';
        }

        $client->save();
        
        return back();
    }
}
