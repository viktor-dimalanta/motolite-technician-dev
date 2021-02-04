<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Event extends Model
{
    //
    protected $fillable = ['title','start_date','end_date'];

    public function participants()
    {
       return $this->hasOne(Participants::class,'training_id', 'id');
    }
}
