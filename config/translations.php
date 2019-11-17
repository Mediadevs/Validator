<?php
//----------------------------------------------------------------------------------------------------------------------
//                                        How to implement parameters
//----------------------------------------------------------------------------------------------------------------------
//
//  List of parameters:
//
//  {%attribute%}:      The field / attribute
//  {%value%}:          The value of the field
//  {%threshold%}:      The threshold of the validation filter
//----------------------------------------------------------------------------------------------------------------------
//
//  If your filter has multiple Thresholds or values, the parameters will go as the following:
//
//  {%value_1%}:        The first value of the field (Increments)
//  {%threshold_1%}:    The first threshold of the field (Increments)
//
//  Displaying text in a list format (separated by comma) example: Dog, Cat, Horse, Rabbit
//  {%threshold_list%}: The first threshold of the field (Increments)
//  {%value_list%}:     The first threshold of the field (Increments)
//
//----------------------------------------------------------------------------------------------------------------------
//
//  If you have a new custom filter and you want to add a translation for it;
//  set-up the translation string as the following:
//
//  'filter_name' => [
//         'default'   => '',
//         'en_US'     => '',
//         'en_UK'     => '',
//'de_DE'     => '',
//         'es_ES'     => '',
//         'it_IT'     => '',
//         'fr_FR'     => '',
//         'nl_NL'     => '',
//         'no_NO'     => '',
//         'pl_PL'     => '',
//         'pt_PT'     => '',
//         'ru_RU'     => '',
//         'sv_SE'     => '',
//     ],
//
//----------------------------------------------------------------------------------------------------------------------
//                      Did you add a new translation? Please submit it to the repository!
//----------------------------------------------------------------------------------------------------------------------

return [
    'required' => [
        'default'   => 'Field: {%attribute%} is required!',
        'en_US'     => 'Field: {%attribute%} is required!',
        'en_UK'     => 'Field: {%attribute%} is required!',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} is verplicht!',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'numeric' => [
        'default'   => 'Field: {%attribute%} must be a numeric value!',
        'en_US'     => 'Field: {%attribute%} must be a numeric value!',
        'en_UK'     => 'Field: {%attribute%} must be a numeric value!',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet een numerieke waarde hebben!',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'float' => [
        'default'   => 'Field: {%attribute%} must be a float!',
        'en_US'     => 'Field: {%attribute%} must be a float!',
        'en_UK'     => 'Field: {%attribute%} must be a float!',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet een numerieke decimale waarde hebben!',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'boolean' => [
        'default'   => 'Field: {%attribute%} must be true or false!',
        'en_US'     => 'Field: {%attribute%} must be true or false!',
        'en_UK'     => 'Field: {%attribute%} must be true or false!',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} mag alleen juist of onjuist zijn!',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'integer' => [
        'default'   => 'Field: {%attribute%} must be an integer!',
        'en_US'     => 'Field: {%attribute%} must be an integer!',
        'en_UK'     => 'Field: {%attribute%} must be an integer!',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet een getal zijn!',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'null' => [
        'default'   => 'Field: {%attribute%} must be null!',
        'en_US'     => 'Field: {%attribute%} must be null!',
        'en_UK'     => 'Field: {%attribute%} must be null!',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet null / leeg zijn!',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'string' => [
        'default'   => 'Field: {%attribute%} must be a string!',
        'en_US'     => 'Field: {%attribute%} must be a string!',
        'en_UK'     => 'Field: {%attribute%} must be a string!',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet een tekst waarde hebben!',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'array' => [
        'default'   => 'Field: {%attribute%} must be an array!',
        'en_US'     => 'Field: {%attribute%} must be an array!',
        'en_UK'     => 'Field: {%attribute%} must be an array!',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet een lijst zijn.',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'before_date' => [
        'default'   => 'Field: {%attribute%} must be earlier then {%threshold%}. Your value: {%value%}.',
        'en_US'     => 'Field: {%attribute%} must be earlier then {%threshold%}. Your value: {%value%}.',
        'en_UK'     => 'Field: {%attribute%} must be earlier then {%threshold%}. Your value: {%value%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet eerder zijn dan {%threshold%}. Uw waarde: {%value%}.',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'after_date' => [
        'default'   => 'Field: {%attribute%} must be later then {%threshold%}. Your value: {%value%}.',
        'en_US'     => 'Field: {%attribute%} must be later then {%threshold%}. Your value: {%value%}.',
        'en_UK'     => 'Field: {%attribute%} must be later then {%threshold%}. Your value: {%value%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet later zijn dan {%threshold%}. Uw waarde: {%value%}.',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'between_date' => [
        'default'   => 'Field: {%attribute%} must be between {%threshold_1%} and {%threshold_2%}. Your value: {%value%}.',
        'en_US'     => 'Field: {%attribute%} must be between {%threshold_1%} and {%threshold_2%}. Your value: {%value%}.',
        'en_UK'     => 'Field: {%attribute%} must be between {%threshold_1%} and {%threshold_2%}. Your value: {%value%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet tusesen {%threshold_1%} en {%threshold_2%} zijn. Uw waarde: {%value%}.',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'starts_with' => [
        'default'   => 'Field: {%attribute%} must start with {%threshold%}. Your value: {%value%}.',
        'en_US'     => 'Field: {%attribute%} must start with {%threshold%}. Your value: {%value%}.',
        'en_UK'     => 'Field: {%attribute%} must start with {%threshold%}. Your value: {%value%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet beginnen met {%threshold%}. Uw waarde: {%value%}.',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'ends_with' => [
        'default'   => 'Field: {%attribute%} must ends with {%threshold%}. Your value: {%value%}.',
        'en_US'     => 'Field: {%attribute%} must ends with {%threshold%}. Your value: {%value%}.',
        'en_UK'     => 'Field: {%attribute%} must ends with {%threshold%}. Your value: {%value%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet eindigen op {%threshold%}. Uw waarde: {%value%}.',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'contains' => [
        'default'   => 'Field: {%attribute%} must contain the substring {%threshold%}. Your value: {%value%}.',
        'en_US'     => 'Field: {%attribute%} must contain the substring {%threshold%}. Your value: {%value%}.',
        'en_UK'     => 'Field: {%attribute%} must contain the substring {%threshold%}. Your value: {%value%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet {%threshold%} bevatten. Uw waarde: {%value%}.',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'regular_expresion' => [
        'default'   => 'Field: {%attribute%} must match the right pattern.',
        'en_US'     => 'Field: {%attribute%} must match the right pattern.',
        'en_UK'     => 'Field: {%attribute%} must match the right pattern.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} volgt niet het juiste patroon.',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'exact_length' => [
        'default'   => 'Field: {%attribute%} must have an exact length of {%threshold%}.',
        'en_US'     => 'Field: {%attribute%} must have an exact length of {%threshold%.}',
        'en_UK'     => 'Field: {%attribute%} must have an exact length of {%threshold%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet een exacte lengte hebben van {%threshold%}.',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'minimum_length' => [
        'default'   => 'Field: {%attribute%} must have a minimum length of {%threshold%}.',
        'en_US'     => 'Field: {%attribute%} must have a minimum length of {%threshold%}.',
        'en_UK'     => 'Field: {%attribute%} must have a minimum length of {%threshold%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet een minimale lengte hebben van {%threshold%}.',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'maximum_length' => [
        'default'   => 'Field: {%attribute%} must have a maximum length of {%threshold%}.',
        'en_US'     => 'Field: {%attribute%} must have a maximum length of {%threshold%}.',
        'en_UK'     => 'Field: {%attribute%} must have a maximum length of {%threshold%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} mag een maximale lengte hebben van {%threshold%}.',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'email' => [
        'default'   => 'Field: {%attribute%} is not a valid email address!',
        'en_US'     => 'Field: {%attribute%} is not a valid email address!',
        'en_UK'     => 'Field: {%attribute%} is not a valid email address!',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} is geen correct email adres!',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'url' => [
        'default'   => 'Field: {%attribute%} is not a valid URL address!',
        'en_US'     => 'Field: {%attribute%} is not a valid URL address!',
        'en_UK'     => 'Field: {%attribute%} is not a valid URL address!',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} is geen correcte url!',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'domain' => [
        'default'   => 'Field: {%attribute%} must be a valid domain!',
        'en_US'     => 'Field: {%attribute%} must be a valid domain!',
        'en_UK'     => 'Field: {%attribute%} must be a valid domain!',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet een correct domein zijn!',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'ip_address' => [
        'default'   => 'Field: {%attribute%} must be a valid IP address!',
        'en_US'     => 'Field: {%attribute%} must be a valid IP address!',
        'en_UK'     => 'Field: {%attribute%} must be a valid IP address!',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet een correct IP adres zijn!',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'ipv4_address' => [
        'default'   => 'Field: {%attribute%} must be a valid IPv4 address!',
        'en_US'     => 'Field: {%attribute%} must be a valid IPv4 address!',
        'en_UK'     => 'Field: {%attribute%} must be a valid IPv4 address!',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet een correct IPv4 adres zijn!',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'ipv6_address' => [
        'default'   => 'Field: {%attribute%} must be a valid IPv6 address!',
        'en_US'     => 'Field: {%attribute%} must be a valid IPv6 address!',
        'en_UK'     => 'Field: {%attribute%} must be a valid IPv6 address!',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet een correct IPv6 adres zijn!',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'mac_address' => [
        'default'   => 'Field: {%attribute%} must be a valid MAC address!',
        'en_US'     => 'Field: {%attribute%} must be a valid MAC address!',
        'en_UK'     => 'Field: {%attribute%} must be a valid MAC address!',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet een correct MAC adres zijn!',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'between' => [
        'default'   => 'Field: {%attribute%} must be between {%threshold_1%} and {%threshold_2%}. Your value: {%value%}.',
        'en_US'     => 'Field: {%attribute%} must be between {%threshold_1%} and {%threshold_2%}. Your value: {%value%}.',
        'en_UK'     => 'Field: {%attribute%} must be between {%threshold_1%} and {%threshold_2%}. Your value: {%value%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet tusesen {%threshold_1%} en {%threshold_2%} zijn. Uw waarde: {%value%}.',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'minimum' => [
        'default'   => 'Field: {%attribute%} must have a minimum worth of {%threshold%}. Your value: {%value%}.',
        'en_US'     => 'Field: {%attribute%} must have a minimum worth of {%threshold%}. Your value: {%value%}.',
        'en_UK'     => 'Field: {%attribute%} must have a minimum worth of {%threshold%}. Your value: {%value%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet een minimale waarde hebben van {%threshold%}. Uw waarde: {%value%}',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'maximum' => [
        'default'   => 'Field: {%attribute%} must have a maximum worth of {%threshold%}. Your value: {%value%}.',
        'en_US'     => 'Field: {%attribute%} must have a maximum worth of {%threshold%}. Your value: {%value%}.',
        'en_UK'     => 'Field: {%attribute%} must have a maximum worth of {%threshold%}. Your value: {%value%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} max een maximale waarde hebben van {%threshold%}. Uw waarde: {%value%}',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'equals_to' => [
        'default'   => 'Field: {%attribute%} must be equal to {%threshold%}. Your value: {%value%}.',
        'en_US'     => 'Field: {%attribute%} must be equal to {%threshold%}. Your value: {%value%}.',
        'en_UK'     => 'Field: {%attribute%} must be equal to {%threshold%}. Your value: {%value%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet gelijk zijn aan {%threshold%}. Uw waarde: {%value%}',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'not_equal_to' => [
        'default'   => 'Field: {%attribute%} must not be equal to {%threshold%}. Your value: {%value%}.',
        'en_US'     => 'Field: {%attribute%} must not be equal to {%threshold%}. Your value: {%value%}.',
        'en_UK'     => 'Field: {%attribute%} must not be equal to {%threshold%}. Your value: {%value%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} mag niet gelijk zijn aan {%threshold%}. Uw waarde: {%value%}',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'greater_than' => [
        'default'   => 'Field: {%attribute%} must be greater than to {%threshold%}. Your value: {%value%}.',
        'en_US'     => 'Field: {%attribute%} must be greater than to {%threshold%}. Your value: {%value%}.',
        'en_UK'     => 'Field: {%attribute%} must be greater than to {%threshold%}. Your value: {%value%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet meer zijn dan {%threshold%}. Uw waarde: {%value%}',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'greater_than_or_equal_to' => [
        'default'   => 'Field: {%attribute%} must be greater or equal to {%threshold%}. Your value: {%value%}.',
        'en_US'     => 'Field: {%attribute%} must be greater or equal to {%threshold%}. Your value: {%value%}.',
        'en_UK'     => 'Field: {%attribute%} must be greater or equal to {%threshold%}. Your value: {%value%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet meer of hetzelfde zijn als {%threshold%}. Uw waarde: {%value%}',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'less_than' => [
        'default'   => 'Field: {%attribute%} must be less to {%threshold%}. Your value: {%value%}.',
        'en_US'     => 'Field: {%attribute%} must be less to {%threshold%}. Your value: {%value%}.',
        'en_UK'     => 'Field: {%attribute%} must be less to {%threshold%}. Your value: {%value%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet minder zijn dan {%threshold%}. Uw waarde: {%value%}',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'less_than_or_equal_to' => [
        'default'   => 'Field: {%attribute%} must be lesser than or equal to {%threshold%}. Your value: {%value%}.',
        'en_US'     => 'Field: {%attribute%} must be lesser than or equal to {%threshold%}. Your value: {%value%}.',
        'en_UK'     => 'Field: {%attribute%} must be lesser than or equal to {%threshold%}. Your value: {%value%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Veld: {%attribute%} moet minder of hetzelfde zijn als {%threshold%}. Uw waarde: {%value%}',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'allowed_extensions' => [
        'default'   => 'Invalid file type! Your file must be of type {%threshold_list%}. Your file type: {%value%}.',
        'en_US'     => 'Invalid file type! Your file must be of type {%threshold_list%}. Your file type: {%value%}.',
        'en_UK'     => 'Invalid file type! Your file must be of type {%threshold_list%}. Your file type: {%value%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Incorrect bestandstype! Je bestand moet het type {%threshold_list%} zijn. Uw bestandstype: {%value%}.',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'allowed_mime_types' => [
        'default'   => 'Invalid file type! Your file must be of type {%threshold_list%}. Your file type: {%value%}.',
        'en_US'     => 'Invalid file type! Your file must be of type {%threshold_list%}. Your file type: {%value%}.',
        'en_UK'     => 'Invalid file type! Your file must be of type {%threshold_list%}. Your file type: {%value%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Incorrect bestandstype! Je bestand moet het type {%threshold_list%} zijn. Uw bestandstype: {%value%}.',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'max_file_size' => [
        'default'   => 'File too large! The size of your file may not be greater than {%threshold%}. File size: {%value%}.',
        'en_US'     => 'File too large! The size of your file may not be greater than {%threshold%}. File size: {%value%}.',
        'en_UK'     => 'File too large! The size of your file may not be greater than {%threshold%}. File size: {%value%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Bestand is te groot! Je bestand mag niet groter zijn dan {%threshold%}. Uw bestandsgrootte: {%value%}.',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'allowed_email_providers' => [
        'default'   => 'Sorry, we only allow email addresses from these provider(s): {%threshold_list%}.',
        'en_US'     => 'Sorry, we only allow email addresses from these provider(s): {%threshold_list%}.',
        'en_UK'     => 'Sorry, we only allow email addresses from these provider(s): {%threshold_list%}.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Sorry, wij staan alleen maar email adressen van deze provider(s) toe: {%threshold_list%}.',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'blocked_email_providers' => [
        'default'   => 'Sorry, the email provider {%value%} has been blocked!',
        'en_US'     => 'Sorry, the email provider {%value%} has been blocked!',
        'en_UK'     => 'Sorry, the email provider {%value%} has been blocked!',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Sorry, de provider {%value%} is geblokkeerd!',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'credit_card' => [
        'default'   => 'Sorry, the credit-card number you have entered is not valid.',
        'en_US'     => 'Sorry, the credit-card number you have entered is not valid.',
        'en_UK'     => 'Sorry, the credit-card number you have entered is not valid.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Sorry, u heeft een onjuist creditcardnummer ingevuld.',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    'iban' => [
        'default'   => 'Sorry, the IBAN number you have entered is not valid.',
        'en_US'     => 'Sorry, the IBAN number you have entered is not valid.',
        'en_UK'     => 'Sorry, the IBAN number you have entered is not valid.',
        'de_DE'     => '',
        'es_ES'     => '',
        'it_IT'     => '',
        'fr_FR'     => '',
        'nl_NL'     => 'Sorry, u heeft een onjuist rekeningnummer ingevuld.',
        'no_NO'     => '',
        'pl_PL'     => '',
        'pt_PT'     => '',
        'ru_RU'     => '',
        'sv_SE'     => '',
    ],

    // Enter your new filters here!
    // If your filter has aliases, please register the aliases inside `/config/validation/alias.php`
];
