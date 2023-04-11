<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MachineOutput extends Model
{
    use HasFactory;
    protected $table = 'machine_outputs';
    protected $fillable = ['id_question','id_answer','id_help','id_result','id_next_question'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }
    public function help()
    {
        return $this->belongsTo(Help::class);
    }
    public function result()
    {
        return $this->belongsTo(Result::class);
    }
}
