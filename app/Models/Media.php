<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Media extends Model
{
    protected $table = 'media';
    protected $fillable = [
        'hero',
        'prop_ex',
        'prop_caption',
        'work_ex',
        'work_caption',
        'product_ex',
        'product_caption',
    ];
    public $timestamps = true;

    /**
     * A media item belongs to a case file
     */
    public function caseFile(): BelongsTo
    {
        return $this->belongsTo(CaseFile::class);
    }
}
