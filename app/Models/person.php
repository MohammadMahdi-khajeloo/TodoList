<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int id
 * @property string first_name
 * @property string last_name
 * @property int age
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class person extends Model
{
    use HasFactory;

    protected $table = "persons";
    protected $fillable = [
        "first_name", "last_name", "age"
    ];
}
