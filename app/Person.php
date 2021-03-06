<?php

namespace App;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
  protected $guarded = array('id');
  
  public static $rules = array(
    'name' =>'required',
    'email' =>'email',
    'age' =>'integer|min:0|max:150'
  );
  
  public function getData(){
    return $this->id . ': ' . $this->name . ' ( ' . $this->age . ' )';
  }
  
  public function scopeAgeGreaterThan($query, $n){
    return $query->where('age', '>=', $n);
  }
  
  public function scopeAgeLessThan($query, $n){
    return $query->where('age', '<=', $n);
  }

  public function boards(){
    return $this->hasMany('App\Board');
  }
}
