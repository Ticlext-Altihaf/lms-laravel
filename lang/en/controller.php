<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Controller Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'success' => array(
        'create' => ':data Created successfully.',
        'update' => ':data Updated successfully.',
        'delete' => ':data Deleted successfully.',
        'get' => ':data Retrieved successfully.',
        "login" => "Logged in successfully.",
    ),
    'error' => array(
        'create' => 'Failed to create.',
        'update' => 'Failed to update.',
        'delete' => 'Failed to delete.',
        'get' => 'Failed to retrieve.',
        'unauthorized' => 'Unauthorized.',
        'not_authorized' => 'Not authorized.',
        'not_found' => 'Not found.',
        'validation' => 'Validation failed.',
        'data_not_found' => ':data not found.',
    ),

];
