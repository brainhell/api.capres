<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAfiliadoRequest;
use App\Http\Requests\UpdateAfiliadoRequest;
use App\Http\Resources\AfiliadoResource;
use App\Models\Afiliado;
use Illuminate\Http\Request;

class AfiliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AfiliadoResource::collection(Afiliado::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAfiliadoRequest $request)
    {
         /* Afiliado::create($request->all());
         return response()->json([
            'res' => true,
            'msg'=> 'Afiliado creado correctamente'

         ], 200); */

         return (new AfiliadoResource(Afiliado::create($request->all())))
            ->additional([
                'msg'=> 'Afiliado registrado correctamente'
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Afiliado $afiliado)
    {
        /* return response()->json([
            'res' => true,
            'afiliado' => $afiliado
        ], 200); */

        return (new AfiliadoResource($afiliado))
            ->additional([
                'msg' => "Se muestra al afiliado cuyo identificador es ".$afiliado->id
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAfiliadoRequest $request, Afiliado $afiliado)
    {
         $afiliado->update($request->all());
        /*return response()->json ([
            'res'=>true,
            'afiliado' => $afiliado,
            'mensaje' => "Afiliado actualizado correctamente"
        ], 200); */
        return (new  AfiliadoResource($afiliado))
            ->additional([
                'msg' => "Se ha actualizado el afiliado número ".$afiliado->id
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Afiliado $afiliado)
    {
       
    
        $afiliado->delete();
       /*  return response()->json ([
            'res'=>true,
            'afiliado' => $afiliado,
            'mensaje' => "Afiliado eliminado correctamente"
        ], 200); */
        return (new  AfiliadoResource($afiliado))
            ->additional([
                "msg" => "Afiliado ".$afiliado->id." eliminado correctamente"
            ]);
    }

}