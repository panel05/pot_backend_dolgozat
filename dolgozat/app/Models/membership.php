<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membership extends Model
{
    use HasFactory;

    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('user_id', '=', $this->getAttribute('id'))
            ->where('club_id', '=', $this->getAttribute('club_id'));
            return $query;
    }

    public function copy_c()
    {    return $this->hasOne(clubs::class, 'club_id', 'club_id');   }

    public function user_c()
    {    return $this->hasOne(User::class, 'id', 'user_id');   }
    protected $fillable = [
        'user_id',
        'club_id'
    ];
}
