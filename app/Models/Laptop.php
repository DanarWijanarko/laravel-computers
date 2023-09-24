<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;

    protected $guarder = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['series'] ?? false, function ($query, $series) {
            return $query->whereHas('series', function ($query) use ($series) {
                $query->where('slug', $series);
            });
        });

        $query->when($filters['company'] ?? false, function ($query, $company) {
            return $query->whereHas('company', function ($query) use ($company) {
                $query->where('slug', $company);
            });
        });
    }

    public function series()
    {
        return $this->belongsTo(Series::class, 'series_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
