<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KaryawanResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'nomor_induk' => $this->nomor_induk,
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'tanggal_lahir' => $this->tanggal_lahir,
            'tanggal_bergabung' => $this->tanggal_bergabung,
        ];
    }
}
