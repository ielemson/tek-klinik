<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Service extends Model
{
    use HasFactory;
    // protected $fillable = ['banner', 'title', 'content', 'slug','type','status','excerpt'];
    protected $fillable = [ 
        'parent_id',
        'title',
        'status',
        'excerpt',
        'content',
        'banner',
        'type',
        'slug',];
 // Relationship: Parent service
    public function parent()
    {
        return $this->belongsTo(Service::class, 'parent_id');
    }

    // Relationship: Child services
    public function children()
    {
        return $this->hasMany(Service::class, 'parent_id');
    }

     // Automatically generate slug on creation
    protected static function booted(): void
    {
        static::creating(function ($service) {
            $service->slug = Str::slug($service->title);
        });

        static::updating(function ($service) {
            $service->slug = Str::slug($service->title);
        });
    }
}
