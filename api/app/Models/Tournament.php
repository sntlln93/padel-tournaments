<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Describes a tournament
 *
 * Each tournament is celebrated within a range of days,
 * hours and its games are organized in groups.
 */
class Tournament extends Model
{
    use HasFactory;
}
