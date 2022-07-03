<?php

namespace App\EloquentFilters;

use Illuminate\Database\Eloquent\Builder;

class VilleFilter
{
    /**
     * Apply the filter after validation passes & sanitize
     * @param string $value
     * @param  Builder  $builder
     */
    public function handle(string $value, Builder $builder): void
    {
        $builder->where('name', $value);
    }
    

    /**
     * @param mixed $value
     * @return bool|string|array
     */
    public function validate($value)
    {
        return (Rule::in([
            'Casablanca',
            'Marrakech',
            'Tanger',
            'Fes',
        ]));
    }
}