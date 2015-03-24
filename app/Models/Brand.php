<?php namespace app\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Product;
class Brand extends Model  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'brands';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name'];


	public function products()
    {
        return $this->hasMany('app\Models\Product', 'brand_id', 'id');
    }

 //    public function sectionsCountRelation()
	// {
	//     return $this->hasMany('app\Models\Product')->selectRaw('brand_id, count(*) as count')->groupBy('brand_id');
	//     // replace module_id with appropriate foreign key if needed
	// }


}
