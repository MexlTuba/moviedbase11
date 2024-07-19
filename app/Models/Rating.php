<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reviewer;

class Rating extends Model
{
    
    public $incrementing = false;
    public $timestamps = false;

    public function reviewer()
    {
        return $this->belongsTo(Reviewer::class, 'rev_id');
    }
}
