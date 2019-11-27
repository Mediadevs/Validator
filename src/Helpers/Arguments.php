<?php

namespace Mediadevs\Validator\Helpers;

class Arguments
{
    /**
     * Delimiters, separators and prefixes for parsing the configuration.
     */
    private const FILTER_DELIMITER = '|';
    private const THRESHOLD_PREFIX = ':';
    private const LIST_SEPARATOR = ',';
    private const REGEX_DELIMITER = '/';

    /**
     * Regular expression patterns for parsing the configuration and extracting the arguments.
     */
    private const PATTERNS = array(
      'filter'              => '/(.*)'.self::THRESHOLD_PREFIX.'/',
      'thresholds'          => '/'.self::THRESHOLD_PREFIX.'(.*)/',
      'regular_expression'  => '/(?<=\\'.self::REGEX_DELIMITER.')(.*?)(?=\\'.self::REGEX_DELIMITER.')/',
    );

    /**
     * The filters from the defined registry class.
     *
     * @var array
     */
    private $filters = array();

    /**
     * The filter aliases from the defined registry class.
     *
     * @var array
     */
    private $aliases = array();

    /**
     * Arguments constructor.
     */
    public function __construct()
    {
    }

    /**
     * Extracting all the filters from the configuration
     * Then we proceed to parse those filters to extract the filters, thresholds, and regular expression patterns.
     *
     * @param array $configuration
     *
     * @return array
     */
    public function getArguments(array $configuration): array
    {
        $arguments = array();
        // Parsing through all the fields and its assigned filters
        foreach ($configuration as $field => $filters) {
            // Parsing through the applied filters
            foreach (explode(self::FILTER_DELIMITER, $filters) as $filter) {
                $filterName = $this->filterArguments($filter, self::PATTERNS['filter']);
                $filterThresholds = $this->filterArguments($filter, self::PATTERNS['thresholds']);

                // Whether the filter is a regular expression
                if ($this->filterIsRegularExpression($filterName)) {
                    $thresholds = $this->getPatternsFromThresholds($filterThresholds);
                } else {
                    $thresholds = $this->getThresholds($filterThresholds);
                }

                // Extracting data from the configuration and storing it inside the arguments array
                $arguments[] = [
                    'field'         => $field,
                    'filter'        => $filter,
                    'thresholds'    => $thresholds,
                ];
            }
        }

        return $arguments;
    }

    /**
     * Extracting the filter name from the arguments.
     *
     * @param string $arguments
     * @param string $pattern
     *
     * @return string
     */
    private function filterArguments(string $arguments, string $pattern): string
    {
        // Whether the string contains filter thresholds
        if (strpos($arguments, self::THRESHOLD_PREFIX) !== false) {
            // Extracting the filter name which is defined before the threshold prefix and returning it
            preg_match($pattern, $arguments, $matches);

            // Returning index #1 (Or the second item in the array) since the first item contains the delimiter
            return $matches[1];
        }

        // The string contains no threshold prefix so the blank string will be returned
        return $arguments;
    }

    /**
     * Extracting the filter threshold(s) from the arguments.
     *
     * @param string $thresholds
     *
     * @return array
     */
    private function getThresholds(string $thresholds): array
    {
        $collection = array();
        $items = explode(self::LIST_SEPARATOR, $thresholds);

        // Parsing through all thresholds (If there are any) and assigning the correct type to it.
        if (count($items) > 0) {
            foreach ($items as $threshold) {
                $collection[] = $this->setCorrectThresholdType($threshold);
            }
        }

        return $collection;
    }

    /**
     * Determines whether the filter is "regular_expression".
     *
     * @param string $filter
     *
     * @return bool
     */
    private function filterIsRegularExpression(string $filter): bool
    {
        $identifier = 'regular_expression';
        // Instantiating the ValidationRegistry
        $aliases = $this->getAliasesByFilter($identifier, $this->aliases);

        // Validating whether the filter name matches any of the aliases or "regular_expression" it self.
        return $filter === $identifier || in_array($filter, $aliases);
    }

    /**
     * If the filter is a regular expression it will handle the thresholds the right way and return clean results.
     *
     * @param string $thresholds
     *
     * @return array
     */
    private function getPatternsFromThresholds(string $thresholds): array
    {
        $collection = array();

        // Checking if there are any patterns for this filters
        if (strpos($thresholds, ':')) {
            preg_match(self::PATTERNS['regular_expression'], $thresholds, $patterns);

            // Parsing through the patterns and storing them inside the thresholds array.
            foreach (explode(self::LIST_SEPARATOR, $patterns) as $pattern) {
                $collection['thresholds'][] = (string) $pattern;
            }
        }

        return $collection;
    }

    /**
     * Determines which type the threshold is and assigning the right type to it.
     *
     * @param string $threshold
     *
     * @return string
     */
    private function setCorrectThresholdType(string $threshold): string
    {
        if (filter_var($threshold, FILTER_VALIDATE_BOOLEAN)) {
            return (bool) $threshold;
        }

        if (filter_var($threshold, FILTER_VALIDATE_INT)) {
            return (int) $threshold;
        }

        if (filter_var($threshold, FILTER_VALIDATE_BOOLEAN)) {
            return (float) $threshold;
        }

        return $threshold;
    }
}
