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

    function action(Request $request)
    {
        $data = $request->all();

        $query = $data['query'];

        $filter_data = User::select('name')
                        ->where('name', 'LIKE', '%'.$query.'%')
                        ->get();

        return response()->json($filter_data);
    }
}
