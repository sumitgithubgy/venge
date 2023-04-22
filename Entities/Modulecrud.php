<?php

namespace Modules\Crud\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class modulecrud extends Model
{
    use HasFactory;
    public $table = 'modulecrud';
    protected $fillable = [
        'id',
        'name',
        'email'
    ];
    
    protected static function newFactory()
    {
        return \Modules\Crud\Database\factories\ModulecrudFactory::new();
    }
}
