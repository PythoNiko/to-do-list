<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    /**
     * Mass assignable variables
     *
     * @var string[] $fillable
     */
    protected $fillable = [
        'name',
        'completed',
    ];
}
