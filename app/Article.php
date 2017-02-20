<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Article extends Model
{
    /**
     * Save Fields
     * 保存过滤器
     */
    protected $fillable = ['title', 'body', 'user_id'];
    
    /**
     * Add Query Fields
     * 扩展访问器
     */
    protected $appends = ['title_body'];
    
    /**
     * Get hook
     * Accessors（访问器）
     */
    public function getTitleBodyAttribute()
    {
        return $this->title.'-'.$this->body;
    }
    
    /**
     * Set hook
     * Accessors（访问器）
     */
    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = $title.'SET';
    }
    
    /**
     * Query hook
     * @param $query
     */
    public function scopeCreatedAt($query)
    {
        $query->where('created_at','<=',Carbon::now());
    }
    
    /**
     * One many hook
     * @return type
     */
    public function hasManyComments()
    {
        return $this->hasMany('App\Comment', 'article_id', 'id');
    }
}
