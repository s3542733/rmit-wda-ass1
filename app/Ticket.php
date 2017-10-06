<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    protected $fillable = [
        'operating_system',
        'issue_title',
        'issue_description',
        'priority',
        'escalation_level',
        'status',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function comment() {
        return $this->hasMany('App\Comment');
    }

}
