<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function departments(){
        return $this->belongsToMany(Department::class, 'department_customers')->as('abc'); // pivot replace to abc
    }


}
