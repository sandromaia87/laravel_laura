<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Championship extends Model
{
    use HasFactory;

    protected $table = "championships";

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'type',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function(Model $model) {
          if(empty($model->user_id)) {
            $model->user_id = Auth::user()->id;
          }
        });

    }

    /**
     * Get the user that owns the championship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function datechamps(): HasMany
    {
        return $this->hasMany(Date_championship::class, 'idchamps', 'id');
    }


    /**
     * Busca todos os campeonatos criados pelo usuario
     */
    static function searchchampsuser()
    {
      return championship::all()->where('user_id',Auth::user()->id);
    }

}
