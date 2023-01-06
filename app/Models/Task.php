<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    // use SoftDeletes;

    /**
     * Table that the model represents
     *
     * ToDo: prob don't need this as per conventions, will revisit.
     *
     * @var string
     */
    protected $table = 'tasks';

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
