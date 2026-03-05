<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'company',
        'website', 'address', 'note', 'type'
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function getTypeLabelAttribute()
    {
        return match($this->type) {
            'fotacek' => 'Fotáček.cz',
            'gastrotech' => 'GastroTech',
            'maponculture' => 'MaponCulture',
            'custom' => 'Vývoj na míru',
            'other' => 'Ostatní',
            default => 'Neznámý'
        };
    }
}