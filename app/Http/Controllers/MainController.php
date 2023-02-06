<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Person;

class MainController extends Controller
{
    public function home()
    {
        $people = Person::all();

        // $data = [
        //     'people' => $people
        // ];

        return view('pages.home', compact('people'));
    }

    public function show(Person $person)
    {
        return view('pages.person', compact('person'));
    }

    public function delete(Person $person)
    {
        $person->delete();
        return redirect()->route('home');
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        $data = $request;
        // -> validate([
        //     'firstName' => 'required|string|max:32',
        //     'lastName' => 'required|string|max:32',
        //     'dateOfBirth' => 'required|date|-120 years|now|NULL,
        //     'heigth' => 'nullable|integer|min:40|max:255',
        // ]);

        $person = new Person();

        $person->firstName = $data['firstName'];
        $person->lastName = $data['lastName'];
        $person->dateOfBirth = $data['dateOfBirth'];
        $person->heigth = $data['heigth'];

        $person->save();

        return redirect()->route('home');
    }
}