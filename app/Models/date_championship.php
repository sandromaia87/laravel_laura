<?php

namespace App\Models;

use App\Models\Championship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Date_championship extends Model
{
    use HasFactory;

    protected $table = "date_championships";

    protected $fillable = [
        'idchamps',
        'date',
    ];

    public function champsdate()
    {
        return $this->belongsTo(Championship::class, 'idchamps', 'id');
    }

    public static function champsdatecrescent($idchamps)
    {
        return Date_championship::all()->where('idchamps', $idchamps)->sortBy('date');
    }
}
