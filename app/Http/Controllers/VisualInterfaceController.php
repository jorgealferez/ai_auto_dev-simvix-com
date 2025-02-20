<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisualInterfaceController extends Controller
{
    /**
     * Muestra la vista principal para el diseño de la interfaz visual corporativa.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retornamos la vista principal para diseñar la identidad visual
        return view('visual_interface.index');
    }

    /**
     * Procesa y almacena la información del diseño de la identidad visual corporativa.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validamos los datos del formulario
        $validated = $request->validate([
            'color_palette' => 'required|string',
            'typography'   => 'required|string',
            'mockup'       => 'required|file|mimes:png,jpg,jpeg,svg,webp',
        ]);

        // Si se ha subido un archivo, procesamos el mockup/prototipo
        if ($request->hasFile('mockup')) {
            // Se almacena el archivo en la carpeta 'mockups' del disco 'public'
            $path = $request->file('mockup')->store('mockups', 'public');
        }

        // Aquí se podría guardar la información en la base de datos o procesarla según los requerimientos del proyecto

        // Redirigimos de regreso a la vista principal con un mensaje de éxito
        return redirect()->route('visual_interface.index')->with('success', 'Diseño actualizado correctamente.');
    }
}
