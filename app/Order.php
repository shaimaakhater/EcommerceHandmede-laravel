<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $filable=[

		'user_id','total_price','address','status','currency','seen'
	];


			public function user()

			{
				return $this-belongsTo('App\User');
			}

			public function orderDetails()

			{
				
				return $this->hasMany('App\OrderDetail');
			}
	

}