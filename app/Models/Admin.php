<?php

// app/Models/Admin.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    protected $primaryKey = 'adm_id';

    protected $fillable = [
        'adm_id', 'adm_password',
    ];

    public $timestamps = false;
}
