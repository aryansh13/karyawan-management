<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CutiResources extends JsonResource
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
            'tanggal_cuti' => $this->tanggal_cuti,
            'lama_cuti' => $this->lama_cuti,
            'keterangan' => $this->keterangan,
        ];
    }
}
