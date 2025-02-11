<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{

    // Define the table name if it's different from the plural of the model name
    protected $table = 'testimonials';

    protected $fillable = [
        'slogan', 'description', 'status', 'created_by', 'edited_by'
    ];
}
