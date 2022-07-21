<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserJob extends Model
{
    protected $defaultSort = 'asc';
    protected $defaultKey = 'id';
    protected $fillable = [];
    

    public function getKeyName() { return $this->defaultKey; }
    public function getSortDirection() { return $this->defaultSort; }

}