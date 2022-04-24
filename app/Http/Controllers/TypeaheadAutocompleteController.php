<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class TypeaheadAutocompleteController extends Controller
{
    function index()
    {
        return view('typeahead_autocomplete');
    }
}
