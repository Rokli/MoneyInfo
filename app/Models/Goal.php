<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Goal extends Model
{
    use HasFactory;
    protected $table = "target";

    protected $fillable = ['user_id', 'name', 'target', 'savings'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
