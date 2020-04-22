<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postman extends Model
{
    protected $guarded = ["id"];//← agregue esto//

    protected $table = 'correspondenciae';
}
