<?php

class audio extends Eloquent
{
    protected $table      = 'audio';
    protected $fillable   = array('nombre', 'audio');
    protected $guarded    = array('id');
    public    $timestamps = false;
    
}
