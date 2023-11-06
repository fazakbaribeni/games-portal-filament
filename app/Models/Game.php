<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;


    /**
     * @var string[]
     */
    protected $fillable = ['name', 'winner_id'];



    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function winner()
    {
        return $this->belongsTo(Member::class, 'winner_id');
    }

    public function participants()
    {
        return $this->belongsToMany(Member::class, 'game_member')
            ->withTimestamps();
    }


    public function gameMembers(){
        return $this->hasMany(GameMember::class);
    }

}
