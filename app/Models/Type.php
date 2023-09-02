<?php

namespace App\Models;

use App\Models\Concerns\ObservesWrites;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory, ObservesWrites;
}
