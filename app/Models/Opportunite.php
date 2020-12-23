<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Opportunite extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'domaine_id',
        'type',
        'titre',
        'contenu',
        'date_expiration',
        'date_publication',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'domaine_id' => 'integer',
        'date_expiration' => 'timestamp',
        'date_publication' => 'timestamp',
        'user_id' => 'integer',
    ];


    public function domaine()
    {
        return $this->belongsTo(\App\Models\Domaine::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
