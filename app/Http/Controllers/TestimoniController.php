<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testi = Testimoni::latest()->paginate(5);

        return view('testi.index', compact('testi'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/testi';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Testimoni::create($input);

        return redirect()->route('testi.index')
            ->with('success', 'Testimoni created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testi)
    {
        return view('index', compact('testi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimoni $testi)
    {
        return view('testi.edit', compact('testi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimoni  $testi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimoni $testi)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/testi';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $testi->update($input);

        return redirect()->route('testi.index')
            ->with('success', 'Testimoni updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimoni  $testi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimoni $testi)
    {
        $testi->delete();

        return redirect()->route('testi.index')
            ->with('success', 'testi deleted successfully');
    }
}
