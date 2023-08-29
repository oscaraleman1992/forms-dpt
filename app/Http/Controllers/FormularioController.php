<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFormularioRequest;
use App\Http\Requests\UpdateFormularioRequest;
use App\Repositories\FormularioRepository;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FormularioController extends AppBaseController
{
    /** @var FormularioRepository $formularioRepository*/
    private $formularioRepository;

    public function __construct(FormularioRepository $formularioRepo)
    {
        $this->formularioRepository = $formularioRepo;
    }

    /**
     * Display a listing of the Formulario.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $formularios = $this->formularioRepository->all();

        return view('formularios.index')
            ->with('formularios', $formularios);
    }

    /**
     * Show the form for creating a new Formulario.
     *
     * @return Response
     */
    public function create()
    {
        return view('formularios.create');
    }

    /**
     * Store a newly created Formulario in storage.
     *
     * @param CreateFormularioRequest $request
     *
     * @return Response
     */
    public function store(CreateFormularioRequest $request)
    {
        $input = $request->all();

        $formulario = $this->formularioRepository->create($input);

        if ($request->hasFile('archivos')) { //se chequea
            $rutaArchivos = [];
            foreach ($request->file('archivos') as $archivo) {
                // Guardar el archivo en el sistema de archivos
                $ruta = $archivo->store('imagenes');
                $rutaArchivos[] = $ruta;
            }

            $archivosString = implode(',', $rutaArchivos);
                // // Crear una instancia de la tabla Imagenes y relacionarla con el formulario
                // $imagen = new Imagen();
                // $imagen->formulario_id = $formulario->id;
                // $imagen->ruta = $ruta;
                // $imagen->save();
            
        }
      


        Flash::success('Formulario saved successfully.');

        return redirect(route('formularios.index'));
    }

    /**
     * Display the specified Formulario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $formulario = $this->formularioRepository->find($id);

        if (empty($formulario)) {
            Flash::error('Formulario not found');

            return redirect(route('formularios.index'));
        }

        return view('formularios.show')->with('formulario', $formulario);
    }

    public function generatePDF($id)
    {
        $formulario = $this->formularioRepository->find($id);

        if (empty($formulario)) {
            Flash::error('Formulario not found');

            return redirect(route('formularios.index'));
        }
        
        return view('formularios.pdf')->with('formulario', $formulario);
    
          
        // $pdf = PDF::loadView('myPDF', $formulario);
    
        // return $pdf->download('itsolutionstuff.pdf');
    }
    /**
     * Show the form for editing the specified Formulario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $formulario = $this->formularioRepository->find($id);

        if (empty($formulario)) {
            Flash::error('Formulario not found');

            return redirect(route('formularios.index'));
        }
        
        return view('formularios.edit')->with('formulario', $formulario);
    }

    /**
     * Update the specified Formulario in storage.
     *
     * @param int $id
     * @param UpdateFormularioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFormularioRequest $request)
    {
        $formulario = $this->formularioRepository->find($id);

        if (empty($formulario)) {
            Flash::error('Formulario not found');

            return redirect(route('formularios.index'));
        }

        $formulario = $this->formularioRepository->update($request->all(), $id);

        Flash::success('Formulario updated successfully.');

        return redirect(route('formularios.index'));
    }

    /**
     * Remove the specified Formulario from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $formulario = $this->formularioRepository->find($id);

        if (empty($formulario)) {
            Flash::error('Formulario not found');

            return redirect(route('formularios.index'));
        }

        $this->formularioRepository->delete($id);

        Flash::success('Formulario deleted successfully.');

        return redirect(route('formularios.index'));
    }
}
