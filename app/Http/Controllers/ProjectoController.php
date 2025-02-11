<?php

namespace App\Http\Controllers;

use App\Models\Projecto;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ProjectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projectos=Projecto::all();
        return view('projectos.index', compact('projectos'));
    }
    public function create()
    {
        return view('projectos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'NombreProjecto' => 'required|string|max:255',
        'fuenteFondos' => 'required|string|max:255',
        'MontoPlanificado' => 'required|numeric',
        'MontoPatrocinado' => 'required|numeric',
        'MontoFondosPropios' => 'required|numeric',
        ]);

        if (!$request->has('NombreProjecto') || empty($request->NombreProjecto)) {
            dd('NombreProyecto no está siendo enviado.');
        }

        Projecto::create($request->all());
        return redirect()->route('projectos.index')->with('success', 'Proyecto creado con exito.');
    }

    public function edit(Projecto $projecto)
    {
        return view('projectos.edit', compact('projecto'));
    }

    public function update(Request $request, Projecto $projecto)
    {
        $request->validate([
            'NombreProjecto' => 'required|string|max:255',
            'fuenteFondos' => 'required|string|max:255',
            'MontoPlanificado' => 'required|numeric',
            'MontoPatrocinado' => 'required|numeric',
            'MontoFondosPropios' => 'required|numeric',
            ]);

        $projecto->update($request->all());
        return redirect()->route('projectos.index')->with('success', 'Proyecto atualizado con exito.');
    }

    public function destroy(Projecto $projecto)
    {
        $projecto->delete();
        return redirect()->route('projectos.index')->with('success', 'Proyecto eliminado con exito.');
    }

    public function getpdf()
    {
        $image=public_path('images/Pdf.png');

        $data=[
            'projectos'=>Projecto::all(),
            'image'=>$image,
        ];
        $pdf=PDF::loadView('projectos.informe', $data);
        return $pdf->stream('informe-projectos.pdf');
    }
}
