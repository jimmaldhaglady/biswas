<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
   public function course()
    {
        return $this->BelongsTo('App\Course');
    }
}
