<?php

namespace Harimayco\Menu\Models;

use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    use UsesTenantConnection;
    protected $table = 'menus';

    public function __construct( array $attributes = [] ){
    	//parent::construct( $attributes );
    	$this->table = config('menu.table_prefix') . config('menu.table_name_menus');
    }

    public static function byName($name)
    {
        return self::where('name', '=', $name)->first();
    }

}
