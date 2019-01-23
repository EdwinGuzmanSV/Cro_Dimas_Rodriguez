<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\AnecdotaStoreRequest;
use App\Http\Requests\AnecdotaUpdateRequest;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use App\Anecdota;
use App\Tag;

class AnecdotaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anecdotas = Anecdota::orderBy('id', 'DESC')
            ->where('user_id', auth()->user()->id)
            ->paginate();

        return view('admin.anecdotas.index', compact('anecdotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags  = Tag::orderBy('name', 'ASC')->get();
        return view('admin.anecdotas.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnecdotaStoreRequest $request)
    {
        $anecdota = Anecdota::create($request->all());
        $this->authorize('pass', $anecdota);

        //IMAGE 
        if($request->file('image')){
            $path = Storage::disk('public')->put('image',  $request->file('image'));
            $anecdota->fill(['file' => asset($path)])->save();
        }

        //TAGS
        $anecdota->tags()->attach($request->get('tags'));

        return redirect()->route('anecdotas.edit', $anecdota->id)->with('info', 'Entrada creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anecdota = Anecdota::find($id);
        $this->authorize('pass', $anecdota);

        return view('admin.anecdotas.show', compact('anecdota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags       = Tag::orderBy('name', 'ASC')->get();
        $anecdota       = Anecdota::find($id);
        $this->authorize('pass', $anecdota);

        return view('admin.anecdotas.edit', compact('anecdota','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnecdotaUpdateRequest $request, $id)
    {
        $anecdota = Anecdota::find($id);
        $this->authorize('pass', $anecdota);

        $anecdota->fill($request->all())->save();

        //IMAGE 
        if($request->file('image')){
            $path = Storage::disk('public')->put('image',  $request->file('image'));
            $anecdota->fill(['file' => asset($path)])->save();
        }
        $anecdota->tags()->sync($request->get('tags'));

        return redirect()->route('anecdotas.edit', $anecdota->id)->with('info', 'Entrada actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anecdota = Anecdota::find($id)->delete();
        //$this->authorize('pass', $anecdota);

        return back()->with('info', 'Eliminado correctamente');
    }
}
