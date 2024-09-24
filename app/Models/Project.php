<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'title',
        'slug',
        'theme',
        'company',
        'start_date',
        'end_date',
        'description'
    ];

    protected $casts = [
        'start_date' => 'datetime:Y-m-d',
        'end_date' => 'datetime:Y-m-d'
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
