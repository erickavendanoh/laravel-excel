<?php

namespace App\Imports;

use App\Models\Usuario;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsuarioImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Usuario([
            'nombre' => $row['nombre_completo'],
            'email' => $row['correo_electronico'],
            'ciudad' => $row['ciudad'],
            'edad' => $row['edad']
        ]);
    }
}
