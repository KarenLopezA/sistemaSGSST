<?php

namespace App\Http\Controllers;

use App\Models\Compromiso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class CompromisoController
 * @package App\Http\Controllers
 */
class CompromisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compromiso = Compromiso::paginate();

        return view('compromisos.index', compact('compromiso'))
            ->with('i', (request()->input('page', 1) - 1) * $compromiso->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compromiso = new Compromiso();
        return view('compromisos.create', compact('compromiso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Compromiso::$rules);

        $compromiso = new Compromiso();

        $compromiso->name = $request->name;
        $compromiso->position_held = $request->position_held;



         if ($request->hasFile("signature_pdf")) {
           $file = $request->file("signature_pdf");

           $nombre = $file->getClientOriginalName();

           $ruta = public_path($nombre);

           copy($file, $ruta);

           $compromiso->signature_pdf = $nombre;

        }


         $compromiso->save();
         // $request->file('signature_pdf')->store('public');





        return redirect()->route('compromisos.index')
            ->with('success', 'Compromiso cargado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compromiso = Compromiso::find($id);

        return view('compromisos.show', compact('compromiso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compromiso = Compromiso::find($id);

        return view('.compromisos.edit', compact('compromiso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Compromiso $compromiso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Compromiso::$rules);

        $signaturepdf = $request->file('signature_pdf')->store('public/signature');
        $urlSignature = Storage::url($signaturepdf);

        $user = Compromiso::where('id',$id)->update([
            'name' => $request->name,
            'position_held' => $request->position_held,
            'signature_pdf' => $request->signature_pdf,

        ]);

        return redirect()->route('compromisos.index')
            ->with('success', 'Compromiso actualizado exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Compromiso::where('id',$id)->delete();

        return redirect()->route('compromisos.index')
            ->with('success', 'Compromiso eliminado Exitosamente');
    }
}
