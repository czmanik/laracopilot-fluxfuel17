<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'client_id', 'description', 'technology',
        'status', 'start_date', 'end_date', 'budget', 'url'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'budget' => 'decimal:2'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function getStatusLabelAttribute()
    {
        return match($this->status) {
            'planning' => 'Plánování',
            'active' => 'Aktivní',
            'completed' => 'Dokončeno',
            'paused' => 'Pozastaveno',
            default => 'Neznámý'
        };
    }

    public function getStatusColorAttribute()
    {
        return match($this->status) {
            'planning' => 'blue',
            'active' => 'green',
            'completed' => 'gray',
            'paused' => 'yellow',
            default => 'gray'
        };
    }
}