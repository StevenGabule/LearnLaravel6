<?php

namespace App\Http\Controllers;

use App\FullTextSearch;
use Illuminate\Http\Request;

class FullTextSearchController extends Controller
{
    function index() {
        return view('full_text_search');
    }

    function action(Request $request)
    {
        if($request->ajax())
        {
            $data = FullTextSearch::search($request->get('full_text_search_query'))->get();
            return response()->json($data);
        }
    }

    function normal_search(Request $request)
    {
        if($request->ajax())
        {
            $data = FullTextSearch::latest()->get();
            return Datatables::of($data)->make(true);
        }

        return view('normal_search');
    }

}
