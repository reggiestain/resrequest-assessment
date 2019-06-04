<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Bookings extends Eloquent{
    
    protected  $fillable = ['firstname','surname','rooms','email','check_in','check_out'];
}
