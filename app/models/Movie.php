<?php

class Movie extends \Eloquent {
	protected $guarded = ['id'];
	protected $table = 'movies';
	public $timestamps = false;
}