<?php

// config for MG/Inbox
return [
    /*
    |--------------------------------------------------------------------------
    | Database Search Operator
    |--------------------------------------------------------------------------
    |
    | This option controls the default operator used for searching in the database.
    | By default, the 'like' operator is used for search queries. However, if you
    | need to perform case-insensitive searches, you can set this to 'ilike'.
    | Please note that 'ilike' is not directly supported in MySQL, but you can
    | achieve similar functionality using the 'like' operator with case normalization.
    |
    | Supported values: 'like', 'ilike'
    |
    */
    'database_search_operator' => env('DATABASE_SEARCH_OPERATOR' , 'like'),

];
