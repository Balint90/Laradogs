<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class BreedFilter extends ApiFilter
{
    //which field(s) can be filtered
    //which filters can be used:
    //eq, ne, gt, lt, gte, lte
    protected $safeParms = [
        'breedName' => ['eq'],
        'breedGroupName' => ['eq'],
        // 'lifespan' => ['eq'],
        // 'temperament' => ['eq'],
        // 'weightInterval' => ['eq'],
        // 'heightInterval' => ['eq'],
    ];

    protected $columnMap = [
        'breedName' => 'breed_name',
        'breedGroupName' => 'breed_group_name',
        // 'weightInterval' => 'weight_interval',
        // 'heightInterval' => 'height_interval',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
    ];
}
