<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class profilerResident extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'profiler_residents';

    protected $fillable = [
        'place_of_residence',
        'city_of_residence',
        'country_of_residence',
        'residence_longitude',
        'residence_latitude',
        'profiler_infos_id',
    ];

    protected $casts = [
        'created_at' => 'datetime:U',
        'updated_at' => 'datetime:U',
        'deleted_at' => 'datetime:U',
    ];

    public function profilerInfos(): BelongsTo
    {
        return $this->belongsTo(profilerInfo::class, 'profiler_infos_id');
    }
}
