<?php

// config for MG/Inbox
return [
    /*
    |--------------------------------------------------------------------------
    | Users Table
    |--------------------------------------------------------------------------
    |
    | This option specifies the default table name used for the users in the
    | application. By default, Laravel assumes the users' table name to be
    | 'users'. However, you can customize this by setting the 'USERS_TABLE'
    | environment variable in your .env file. This allows you to use a
    | different table name for your users, which might be useful if you
    | have an existing database schema or naming convention.
    |
    | Example usage in your .env file:
    |   USERS_TABLE=my_users
    |
    */

    'users_table' => env('USERS_TABLE' , 'users'),
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
