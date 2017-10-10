<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LinksController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'path' => 'url',
            'type' => Rule::in([Link::TYPE_GOO, Link::TYPE_BAAH])
        ]);


        auth()->user()->links()->create($data);

        return redirect()->back()
            ->with('link_posted', $data['type']);
    }
}
