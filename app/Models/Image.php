<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $id
 * @property mixed $file_name
 * @property mixed $imageable_id
 * @property mixed $imageable_type
 * @property mixed $created_at
 * @property mixed $updated_at
 */
class Image extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function imageable()
    {
        return $this->morphTo();
    }
}
