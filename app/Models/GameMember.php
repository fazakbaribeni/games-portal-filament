<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameMember extends Model
{
    use HasFactory;

    protected $table = 'game_member';

    /**
     * @var string[]
     */
    protected $fillable = [

        "member_id",
        "game_id",
        "score",
        "is_winner",
    ];
}
