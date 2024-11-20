<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    // Relation avec Preselector
    public function preselectors()
    {
        return $this->hasMany(Preselector::class);
    }

    // Relation avec Senator
    public function senators()
    {
        return $this->hasMany(Senator::class);
    }

    // Relation avec Governor
    public function governors()
    {
        return $this->hasMany(Governor::class);
    }
}
