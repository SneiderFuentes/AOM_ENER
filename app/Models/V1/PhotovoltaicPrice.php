<?php

namespace App\Models\V1;

use App\Models\Traits\AuditableTrait;
use App\Models\Traits\PaginatorTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhotovoltaicPrice extends Model
{
    use HasFactory;
    use SoftDeletes;
    use AuditableTrait;
    use PaginatorTrait;


    protected $fillable = [
        "network_operator_id",
        "stratum_id",
        "subsidy",
        "price",
        "credit",
        "month",
        "year",
        "default_rate"
    ];

    public function network_operator()
    {
        return $this->belongsTo(NetworkOperator::class);
    }

    public function stratum()
    {
        return $this->belongsTo(Stratum::class);
    }
}
