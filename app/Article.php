<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	//

		protected $table = 'articles';
		 protected $fillable=[

		 'title','body','published_at'

			 ];

// public funtion user(){


//    return $this->belongsTo('App\User');


// }

}
