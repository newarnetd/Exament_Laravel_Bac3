<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preselector extends Model
{
    use HasFactory;

    protected $table = 'preselectors';
    protected $fillable = ['PresElector_id', 'First_name', 'Last_name', 'Gender', 'Age', 'State_id', 'Party_id'];

    // Relation avec Party
    public function party()
    {
        return $this->belongsTo(Party::class, 'Party_id'); // 'Party_id' est la clé étrangère
    }

    // Relation avec State
    public function state()
    {
        return $this->belongsTo(State::class, 'State_id'); // 'State_id' est la clé étrangère
    }
}
