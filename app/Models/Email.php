<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Email extends Model
{
    use SoftDeletes;

    protected $table = "emails";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'remetente','destinatarios','conteudo'
    ];


}
