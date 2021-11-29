<?php

namespace App\Http\Controllers;

use App\Models\Configuracion;
use Illuminate\Http\Request;
use App\Http\Controllers\storage;


/**
 * Class ConfiguracionController
 * @package App\Http\Controllers
 */
class ConfiguracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configuracions = Configuracion::paginate();

        return view('configuracion.index', compact('configuracions'))
            ->with('i', (request()->input('page', 1) - 1) * $configuracions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $configuracion = new Configuracion();
        return view('configuracion.create', compact('configuracion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Configuracion::$rules);

        $configuracion = new Configuracion();

        $configuracion->name = $request->name;
        $configuracion->nit = $request->nit;
        $configuracion->economic_activity = $request->economic_activity;
        $configuracion->risk_level = $request->risk_level;
        $configuracion->number_of_workers = $request->number_of_workers;
        $configuracion->legal_nature = $request->legal_nature;
        $configuracion->telephone_contacts = $request->telephone_contacts;
        $configuracion->email = $request->email;
        $configuracion->type_of_company = $request->type_of_company;

        if ($request->hasFile("georeferencing")) {
            $file = $request->file("georeferencing");

            $nombre = $file->getClientOriginalName();

            $ruta = public_path($nombre);

            copy($file, $ruta);

            $configuracion->georeferencing = $nombre;

        }

         $configuracion->save();


        return redirect()->route('configuracions.index')
            ->with('success', 'Configuracion creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configuracion = Configuracion::find($id);

        return view('configuracion.show', compact('configuracion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configuracion = Configuracion::find($id);

        return view('configuracion.edit', compact('configuracion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Configuracion $configuracion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Configuracion::$rules);

        $georeferencing = $request->file('georeferencing')->store('public/georeferencing');
        //$georeferencing = Storage::url($georeferencing);

        $user = Configuracion::where('id',$id)->update([
            'name' => $request->name,
            'nit' => $request->nit,
            'georeferencing' => $request->georeferencing,
            'economic_activity' => $request->economic_activity,
            'risk_level' => $request->risk_level,
            'number_of_workers' => $request->number_of_workers,
            'legal_nature' => $request->legal_nature,
            'telephone_contacts' => $request->telephone_contacts,
            'email' => $request->email,
            'type_of_company' => $request->type_of_company,
        ]);

        //$configuracion->update($request->all());

        return redirect()->route('configuracions.index')
            ->with('success', 'Configuracion actualizada exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Configuracion::where('id',$id)->delete();
        //$configuracion = Configuracion::find($id)->delete();

        return redirect()->route('configuracions.index')
            ->with('success', 'Configuracion deleted successfully');
    }
}
