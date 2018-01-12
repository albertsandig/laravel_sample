<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
   //table name
   protected $table = 'inquiries';
	//primary key
	public $primary_key = 'id';
	//timestamps
	public $timestamps = false;
	
}
