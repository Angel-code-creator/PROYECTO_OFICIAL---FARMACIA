<?php
/*
namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
/*
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
/*
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
/*
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
/*
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
*/


namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Define la tabla que este modelo utilizará
    protected $table = 'usuarios'; // Nombre de tu tabla en la base de datos

    // Define la clave primaria de la tabla
    protected $primaryKey = 'ID_Usuario'; // Tu clave primaria en la tabla

    // Laravel por defecto espera una columna 'id', por lo que al cambiarla a 'ID_Usuario', no necesitas configurar nada más
    public $timestamps = false; // Si no usas created_at y updated_at, puedes mantener esto en false

    // Define los campos que son "mass assignable" (pueden ser asignados masivamente)
    protected $fillable = [
        'Nombre',
        'Apellido',
        'Correo',
        'Contraseña',
        'rol',
        'Estado_Auditoria',
        'Fecha_Creacion_Auditoria',
    ];

    // Si no quieres que Laravel intente guardar ciertos campos, puedes hacerlos no asignables
    protected $guarded = [];

    // Encriptar la contraseña antes de guardarla
    public function setPasswordAttribute($value)
    {
        $this->attributes['Contraseña'] = bcrypt($value);
    }

    // Método para verificar si el usuario es un administrador
    public function isAdmin()
    {
        return $this->Rol === 'admin'; // Asume que el rol 'admin' tiene permisos especiales
    }
}
