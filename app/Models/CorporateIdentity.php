<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Clase CorporateIdentity
 *
 * Este modelo representa la identidad corporativa y encapsula la funcionalidad
 * asociada a la organización y manejo de datos relacionados con la identidad
 * corporativa de la empresa.
 */
class CorporateIdentity extends Model
{
    use HasFactory;

    // Tabla asociada al modelo
    protected $table = 'corporate_identities';

    /**
     * Atributos asignables de forma masiva
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'palette',
        'typography',
        'iconography',
        'logo',
        'graphics',
    ];
}
