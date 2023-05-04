<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Describes the days and hours that are playable
 *
 * Each day consist of a date, a time and a court
 * available for a game to be played.
 */
class PlayableDay extends Model
{
    use HasFactory;
}
