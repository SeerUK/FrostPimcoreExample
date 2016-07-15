<?php

use SeerUK\Frost\Condition\CallableCondition;
use SeerUK\Frost\Feature;

return [
    new Feature("example.basic", new CallableCondition(function(): bool {
        $sessionId = session_id();
        $split = str_split($sessionId);

        $strings = array_filter($split, function($char) {
            return is_numeric($char);
        });

        $numbers = array_map(function($number) {
            return intval($number);
        }, $strings);

        $sum = array_sum($numbers);

        return $sum % 2 == 0;
    }))
];
