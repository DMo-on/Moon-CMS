<?php

namespace Fully\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Faq.
 *
 */
class Faq extends Model
{
    public $table = 'faqs';
    protected $fillable = array('question', 'answer');
}
