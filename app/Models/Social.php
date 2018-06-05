<?php
namespace App\models;
use Illuminate\Database\Eloquent\Model;
use Plokko\LaravelFirebase\Traits\SyncWithFirebase;

class Social extends Model
{
	use SyncsWithFirebase;
	 function toFirebase(){
        return [
            'id'    => $this->id,
            'name'  => $this->name,
            
            //....
        ];
    }
    protected $table = 'users';
    public $timestamps = false;
}
