<?php

namespace Fully\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Setting.
 *
 */
class Setting extends Model
{
    public $table = 'settings';
    public $fillable = ['settings', 'lang'];
}
