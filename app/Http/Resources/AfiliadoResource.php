<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class AfiliadoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $capres_fecha = $this->capres_fecha;
        return [
            'id' => $this->id,
            'nombre' => Str::title($this->nombre),
            'cedula' => $this->cedula,
            'correo' => $this->correo,
            'unidad' => $this->unidad,
            'telf_oficina' => $this->telf_oficina,
            'telf_habitacion' => $this->telf_habitacion,
            'region' => Str::upper($this->region),
            'cargo' => $this->cargo,
            'grado' => $this->grado,
            'sueldo' => $this->sueldo,
            'banco' => $this->banco,
            'cuenta' => $this->cuenta,
            'porcentaje' => $this->porcentaje,
            'procesado' => $this->procesado,
            'fecha' => (!isset($this->fecha) ? now()->format('d-m-Y'): $this->fecha),
            'capres_procesado' => $this->capres_procesado,
            'capres_user' => $this->capres_user,
            'capres_fecha' => (!isset($capres_fecha) ? now()->format('d-m-Y'): $capres_fecha),
            /* "created_at" => $this->created_at->format('d-m-Y') */
        ];
    }
    public function with($request)
    {
        return [
            'res' => true
        ];
    }
}
