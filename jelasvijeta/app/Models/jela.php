<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jela extends Model
{
    protected $table = 'jela';

    public function kategorija()
    {
        return $this->belongsTo(kategorija::class, 'kategorija_id');
    }

    public function tag()
    {
        return $this->belongsTo(tag::class, 'tag_id');
    }

    public function sastojci()
    {
        return $this->belongsTo(sastojci::class, 'sastojci_id');
    }

}
