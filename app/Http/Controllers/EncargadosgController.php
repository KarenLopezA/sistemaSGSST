<?php

namespace App\Http\Controllers;

use App\Models\Encargadosg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class EncargadosgController
 * @package App\Http\Controllers
 */
class EncargadosgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encargadosg = Encargadosg::paginate();

        return view('encargadosgs.index', compact('encargadosg'))
            ->with('i', (request()->input('page', 1) - 1) * $encargadosg->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $encargadosg = new Encargadosg();
        return view('encargadosgs.create', compact('encargadosg'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Encargadosg::$rules);

        $encargadosg = new Encargadosg();

        $encargadosg->name = $request->name;
        $encargadosg->lastname = $request->lastname;
        $encargadosg->identification = $request->identification;
        $encargadosg->study_level = $request->study_level;

         if ($request->hasFile("curriculum_pdf")) {
           $file = $request->file("curriculum_pdf");

           $nombre = $file->getClientOriginalName();

           $ruta = public_path($nombre);

           copy($file, $ruta);

           $encargadosg->curriculum_pdf = $nombre;

        }

        if ($request->hasFile("diploma_pdf")) {
            $file = $request->file("diploma_pdf");

            $nombre = $file->getClientOriginalName();

            $ruta = public_path($nombre);

            copy($file, $ruta);

            $encargadosg->diploma_pdf = $nombre;

         }

         if ($request->hasFile("health_pdf")) {
            $file = $request->file("health_pdf");

            $nombre = $file->getClientOriginalName();

            $ruta = public_path($nombre);

            copy($file, $ruta);

            $encargadosg->health_pdf = $nombre;

         }

         if ($request->hasFile("curse_pdf")) {
            $file = $request->file("curse_pdf");

            $nombre = $file->getClientOriginalName();

            $ruta = public_path($nombre);

            copy($file, $ruta);

            $encargadosg->curse_pdf = $nombre;

         }

         $encargadosg->save();

        // $request->file('curriculum_pdf')->store('public');
        // $request->file('diploma_pdf')->store('public');
        // $request->file('curse_pdf')->store('public');
        // $request->file('health_pdf')->store('public');



        return redirect()->route('encargadosgs.index')
            ->with('success', 'Encargado Creado Exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $encargadosg = Encargadosg::find($id);

        return view('encargadosgs.show', compact('encargadosg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $encargadosg = Encargadosg::find($id);

        return view('.encargadosgs.edit', compact('encargadosg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Encargadosg $encargadosg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Encargadosg::$rules);

        $curriculumpdf = $request->file('curriculum_pdf')->store('public/curriculum');
        $urlCurriculum = Storage::url($curriculumpdf);

        $user = Encargadosg::where('id',$id)->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'identification' => $request->identification,
            'study_level' => $request->study_level,
            'curriculum_pdf' => $urlCurriculum,
            'diploma_pdf' => $request->diploma_pdf,
            'curse_pdf' => $request->curse_pdf,
            'health_pdf' => $request->health_pdf,
        ]);

        return redirect()->route('encargadosgs.index')
            ->with('success', 'Encargado Actualizado Exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Encargadosg::where('id',$id)->delete();

        return redirect()->route('encargadosgs.index')
            ->with('success', 'Encargado eliminado Exitosamente');
    }
}
