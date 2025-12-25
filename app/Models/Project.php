<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/Project.php
class Project extends Model
{
    protected $fillable = ['title', 'image', 'description'];
}

