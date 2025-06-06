<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EventTag extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'slug',
  ];

  public function events(): BelongsToMany
  {
    return $this->belongsToMany(Event::class, 'event_tag_relations', 'tag_id', 'event_id')
      ->withTimestamps();
  }
}
