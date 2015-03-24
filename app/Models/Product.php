<?php namespace app\Models;

use Illuminate\Database\Eloquent\Model;

use app\Models\Brand;
class Product extends Model  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'products';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name'];

	public function brands()
    {
        return $this->belongsTo('app\Models\Brand', 'brand_id', 'id');
    }

}
