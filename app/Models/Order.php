<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    protected  $fillable=['date_in'];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class,'employee_id');
    }
    public function supply(): BelongsTo
    {
        return $this->belongsTo(Supply::class,'supply_id');
    }
}
