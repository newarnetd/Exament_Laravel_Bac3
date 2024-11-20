<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Governor extends Model
{
    use HasFactory;

    protected $fillable = ['First_name', 'Last_name', 'Age', 'Gender', 'Governor_id', 'Party_id', 'State_id'];

    // Relation avec Party
    public function party()
    {
        return $this->belongsTo(Party::class);
    }

    // Relation avec State
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
