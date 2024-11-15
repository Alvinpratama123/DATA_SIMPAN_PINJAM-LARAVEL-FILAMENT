<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DataPinjaman extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'jumlah',
        'tanggal_pinjam',
        'keterangan',
        'bunga',
        'status',
        'jangka_waktu',
        'keterangan',
        'no_trx'




    ];

        /**
     * Get the user that owns the phone.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

        /**
     * Get the comments for the blog post.
     */
    public function angsurans(): HasMany
    {
        return $this->hasMany(angsuran::class);
    }

}
