<?php

namespace App\Http\Controllers;

use App\Models\Aliado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class AliadoController
 * @package App\Http\Controllers
 */
class AliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aliado = Aliado::paginate();

        return view('aliados.index', compact('aliado'))
            ->with('i', (request()->input('page', 1) - 1) * $aliado->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aliado = new Aliado();
        return view('aliados.create', compact('aliado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Aliado::$rules);

        $aliado = new Aliado();

        $aliado->name = $request->name;
        $aliado->nit = $request->nit;
        //$aliado->certificate_pdf = $request->certificate_pdf;
       // $aliado->social_security_pdf = $request->social_security_pdf;
       // $aliado->security_file_pdf = $request->security_file_pdf;


         if ($request->hasFile("certificate_pdf")) {
           $file = $request->file("certificate_pdf");

           $nombre = $file->getClientOriginalName();

           $ruta = public_path($nombre);

           copy($file, $ruta);

           $aliado->certificate_pdf = $nombre;

        }

          if ($request->hasFile("social_security_pdf")) {
            $file = $request->file("social_security_pdf");

            $nombre = $file->getClientOriginalName();

            $ruta = public_path($nombre);

            copy($file, $ruta);

            $aliado->social_security_pdf = $nombre;

         }

         if ($request->hasFile("security_file_pdf")) {
            $file = $request->file("security_file_pdf");

            $nombre = $file->getClientOriginalName();

            $ruta = public_path($nombre);

            copy($file, $ruta);

            $aliado->security_file_pdf = $nombre;

         }

         $aliado->save();





        return redirect()->route('aliados.index')
            ->with('success', 'Aliado o proveedor creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aliado = Aliado::find($id);

        return view('aliados.show', compact('aliado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aliado = Aliado::find($id);

        return view('.aliados.edit', compact('aliado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Aliado $aliado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Aliado::$rules);

        $certificatepdf = $request->file('certificate_pdf')->store('public/certificate');
        $urlCertificate = Storage::url($certificatepdf);

        $user = Aliado::where('id',$id)->update([
            'name' => $request->name,
            'nit' => $request->nit,
            'certificate_pdf' => $urlCertificate,
            'social_security_pdf' => $request->social_security_pdf,
            'security_file_pdf' => $request->security_file_pdf,

        ]);
        return redirect()->route('aliados.index')
            ->with('success', 'Proveedor actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Aliado::where('id',$id)->delete();

        return redirect()->route('aliados.index')
            ->with('success', 'Proveedor eliminado exitosamente');
    }
}
