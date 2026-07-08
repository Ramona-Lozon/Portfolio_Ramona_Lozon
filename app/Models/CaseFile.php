<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CaseFile extends Model
{
    protected $table = 'case_files';
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
    public function media(): HasMany
    {
        return $this->hasMany(Media::class);
    }
}
