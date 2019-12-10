<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $filable=[
		'category_id','brand_id','user_id','name','slug','price','original_price','detaile','seo_desc', 'seo_keys'
	];

	public function stocks()
	{

		return $this->hasMany('App\Stock');

	}

	public function orders()
	{

		return $this->hasMany('App\OrderDetail');

	}

 	public function user()
	{

		return $this-belongsTo('App\User');

	}

	public function brand()
	{

	return $this-belongsTo('App\Brand');
	
	}

		public function category()
	{

		return $this-belongsTo('App\Category');
	}
}