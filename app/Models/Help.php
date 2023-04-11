<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    use HasFactory;
    protected $table = 'helps';
    protected $fillable = ['text_help'];

    public function machineOutputs()
    {
        return $this->hasMany(MachineOutput::class);
    }
}
