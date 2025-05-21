<?php

return [

    // new-chat component
    'chat' => [
        'labels' => [
            'heading' => '新的聊天',
            'you' => '您',

        ],

        'inputs' => [
            'search' => [
                'label' => '搜尋對話',
                'placeholder' => '搜尋',
            ],
        ],

        'actions' => [
            'new_group' => [
                'label' => '新的群組',
            ],

        ],

        'messages' => [

            'empty_search_result' => '未找到符合您搜尋條件的使用者。',
        ],
    ],

    // new-group component
    'group' => [
        'labels' => [
            'heading' => '新的聊天',
            'add_members' => '新增成員',

        ],

        'inputs' => [
            'name' => [
                'label' => '群組名稱',
                'placeholder' => '輸入名稱',
            ],
            'description' => [
                'label' => '說明',
                'placeholder' => '選填',
            ],
            'search' => [
                'label' => '搜尋',
                'placeholder' => '搜尋',
            ],
            'photo' => [
                'label' => '相片',
            ],
        ],

        'actions' => [
            'cancel' => [
                'label' => '取消',
            ],
            'next' => [
                'label' => '下一個',
            ],
            'create' => [
                'label' => '建立',
            ],

        ],

        'messages' => [
            'members_limit_error' => '成員不能超過 :count 人',
            'empty_search_result' => '未找到符合您搜尋條件的使用者。',
        ],
    ],

];
