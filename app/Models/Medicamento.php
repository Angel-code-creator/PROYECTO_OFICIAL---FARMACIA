<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    // Si el nombre de la tabla no es la versión plural del nombre del modelo
    protected $table = 'medicamentos';

    // Nombre de la clave primaria
    protected $primaryKey = 'ID_Medicamento';

    // Si no es auto-incremental, indícalo
    public $incrementing = true;

    // Definir qué campos se pueden llenar masivamente
    protected $fillable = [
        'Nombre',
        'Descripcion',
        'Categoria',
        'Precio',
        'Stock',
        'Estado_Auditoria',
        'Fecha_Creacion_Auditoria'
    ];

    // Si la tabla no tiene una columna "created_at" y "updated_at"
    public $timestamps = false;
}

