<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $table = 'results';
    protected $fillable = ['text_result'];

    public function machineOutputs()
    {
        return $this->hasMany(MachineOutput::class);
    }
}
