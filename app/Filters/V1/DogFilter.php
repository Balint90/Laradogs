<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class DogFilter extends ApiFilter
{
    //which field(s) can be filtered
    //which filters can be used:
    //eq, ne, gt, lt, gte, lte
    protected $safeParms = [
        'name' => ['eq'],
        'age' => ['eq', 'gt', 'lt', 'gte', 'lte', 'ne'],
        'weight' => ['eq'],
        'height' => ['eq'],
        // 'weightInterval' => ['eq'],
        // 'heightInterval' => ['eq'],
    ];

    protected $columnMap = [];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!='
    ];
}
