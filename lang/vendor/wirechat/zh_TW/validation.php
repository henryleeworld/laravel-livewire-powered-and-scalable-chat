<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Laravel Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default  error messages used by
    | the Laravel validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'file' => ':attribute 必須是有效的檔案。',
    'image' => ':attribute 必須是一張圖片。',
    'required' => ':attribute 不能留空。',
    'max' => [
        'array' => ':attribute 最多有 :max 個元素。',
        'file' => ':attribute 不能大於 :max KB。',
        'numeric' => ':attribute 不能大於 :max。',
        'string' => ':attribute 不能多於 :max 個字元。',
    ],
    'mimes' => ':attribute 必須為 :values 的檔案。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [],

];
