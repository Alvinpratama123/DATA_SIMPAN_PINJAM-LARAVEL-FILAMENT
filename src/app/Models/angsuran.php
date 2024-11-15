<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class angsuran extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'data_pinjaman_id',
        'jumlah_bayar',
        'tanggal_bayar',
        'keterangan',
      
       


    ];
        /**
     * Get the user that owns the phone.
     */
    public function data_pinjaman(): BelongsTo
    {
        return $this->belongsTo(DataPinjaman::class);
    }

}
