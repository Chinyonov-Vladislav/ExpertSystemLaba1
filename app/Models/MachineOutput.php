<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MachineOutput extends Model
{
    use HasFactory;
    protected $table = 'machine_outputs';
    protected $fillable = ['id_question','id_answer','id_help','id_result','id_next_question'];

    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }
    public function answers()
    {
        return $this->belongsToMany(Answer::class);
    }
    public function helps()
    {
        return $this->belongsToMany(Help::class);
    }
    public function results()
    {
        return $this->belongsToMany(Result::class);
    }
}
