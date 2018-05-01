<?php

namespace App;
use App\Base;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Builder;

class Post extends Base
{
    //protected $table ="post2"   if the table is not post,use it ;
    protected  $guarded = [];

   // protected $fillable=['title','content'];
     public function user(){
         return $this->belongsTo('App\User','user_id','id');//table_name out_jian zhu_jian
     }
    public function comment(){
        return $this->hasMany('App\Comment')->orderBy('created_at','desc');
    }

    //global scope
    protected static function boot(){
        parent::boot();
        static::addGlobalScope('avaiable',function(Builder $builder){
            $builder->whereIn('status',[0,1]);
        });
    }
}
