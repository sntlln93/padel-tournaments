<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Describes a group within a tournament
 *
 * Each group consists of a subset of participant teams
 * that only play against other participants within the
 * same group.
 */
class Group extends Model
{
    use HasFactory;
}
