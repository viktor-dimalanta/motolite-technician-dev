<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
  public function event()
  {
      return $this->belongsTo(Event::class,'id', 'training_id');
  }
}
