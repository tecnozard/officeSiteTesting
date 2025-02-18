<?php
    namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypingTestResult extends Model
{
    use HasFactory;

    protected $fillable = ['career_id', 'words_typed', 'accuracy', 'is_selected'];

    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
