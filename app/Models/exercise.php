<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;
    protected $table = 'exercises';
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::saved(function ($exercise) {
            if ($exercise->title) {
                $weight = Weight::firstOrCreate(
                    ['title_id' => $exercise->id]
                );
            }
        });

        static::deleting(function ($exercise) {
            $exercise->weight()->delete();
        });
    }
    
    public function weight()
    {
        return $this->hasOne(Weight::class, 'title_id');
    }
}
