<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CaseFile extends Model
{
    protected $table = 'case_file';
    protected $fillable = [
        'project',
        'proposition',
        'deliverables',
        'outcome',
    ];
    public $timestamps = true;

    /**
     * A case file has many media items
     */
    public function media(): HasOne
    {
        return $this->hasOne(Media::class, 'case_file_id');
    }
}
