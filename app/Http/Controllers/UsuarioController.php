<?php

namespace App\Http\Controllers;

use App\Exports\UsuarioExport;
use App\Imports\UsuarioImport;
use Maatwebsite\Excel\Facades\Excel;

class UsuarioController extends Controller
{
    public function import()
    {
        try{
            Excel::import(new UsuarioImport, 'C:\Users\Erick\Desktop\Libro1.xlsx');
            return 1;
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function export() 
    {
        try{
            return Excel::download(new UsuarioExport, 'usuarios.xlsx');
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
}
