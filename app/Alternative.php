<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    protected $table = 'alternatives';
    protected $fillable = ['nama', 'kode', 'penciptaan_arsip', 'pemindahan_arsip', 'pemberkasan', 'layanan_arsip', 'pengelolaan_arsip'];

    public function value()
    {
        return $this->hasOne(Value::class);
    }

    public function criteria()
    {
        return $this->hasOne(Criteria::class);
    }
}
