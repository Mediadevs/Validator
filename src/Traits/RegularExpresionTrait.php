<?php

namespace Mediadevs\Validator\Traits;

trait RegularExpresionTrait
{
    /**
     * Parsing through the expressions and generating a fitting output for the RegularExpression filter.
     *
     * @param array $regularExpressions
     *
     * @return array
     */
    protected function generateRegularExpressionsOptionsArray(array $regularExpressions): array
    {
        $output = ['options'];

        // Parsing through the expressions
        foreach ($regularExpressions as $regularExpression) {
            $output['options'] = ['regexp' => $regularExpression];
        }

        return $output;
    }
}
