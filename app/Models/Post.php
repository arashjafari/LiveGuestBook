<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */ 
    protected $fillable = [
        'email',
        'name',
        'content',
        'secret'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'secret'
    ];

    /**
     * Get user profile image link from gravatar.com
     *
     * @return string
     */
    public function getGravatarUrlAttribute()
    {   
        $url = "https://www.gravatar.com/avatar/" . 
                    md5( strtolower( trim( $this->email ) ) ) . 
                    "?s=50";

        return $url;
    }

    /**
     * Get post publishing date and time with human readable format
     * 
     * @return string
     */
    public function getPublishTimeAttribute()
    { 
        return Carbon::createFromTimeStamp(
                            strtotime($this->created_at)
                        )->diffForHumans();
    } 

}
