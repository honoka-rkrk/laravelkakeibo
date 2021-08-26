<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expence extends Model
{
    use HasFactory;

    /**
     * 整形した期限日
     * @return string
     */
    public function getFormattedWriteDateAttribute(){
        return Carbon::createFromFormat('Y-m-d',$this->attributes['write_date'])
        ->format('Y/m/d');
    }
}
