<?php

return [

    /**-------------------------
     * Chat
     *------------------------*/
    'labels' => [

        'you_replied_to_yourself' => '您回覆了您自己',
        'participant_replied_to_you' => ':sender回覆您',
        'participant_replied_to_themself' => ':sender回覆了自己',
        'participant_replied_other_participant' => ':sender回覆:receiver',
        'you' => '您',
        'user' => '使用者',
        'replying_to' => '回覆:participant',
        'replying_to_yourself' => '回覆自己',
        'attachment' => '附件',
    ],

    'inputs' => [
        'message' => [
            'label' => '訊息',
            'placeholder' => '輸入訊息',
        ],
        'media' => [
            'label' => '媒體',
            'placeholder' => '媒體',
        ],
        'files' => [
            'label' => '檔案',
            'placeholder' => '檔案',
        ],
    ],

    'message_groups' => [
        'today' => '今天',
        'yesterday' => '昨天',

    ],

    'actions' => [
        'open_group_info' => [
            'label' => '群組資訊',
        ],
        'open_chat_info' => [
            'label' => '聊天資訊',
        ],
        'close_chat' => [
            'label' => '關閉聊天',
        ],
        'clear_chat' => [
            'label' => '清除聊天記錄',
            'confirmation_message' => '您確定要清除聊天記錄嗎？這只會清除您的聊天記錄，不會影響其他參與者。',
        ],
        'delete_chat' => [
            'label' => '刪除聊天',
            'confirmation_message' => '您確定要刪除此聊天嗎？這只會刪除您這邊的聊天記錄，而不會刪除其他參與者的聊天記錄。',
        ],

        'delete_for_everyone' => [
            'label' => '刪除所有人',
            'confirmation_message' => '您確定嗎？',
        ],
        'delete_for_me' => [
            'label' => '僅刪除我',
            'confirmation_message' => '您確定嗎？',
        ],
        'reply' => [
            'label' => '回覆',
        ],

        'exit_group' => [
            'label' => '退出群組',
            'confirmation_message' => '您確定要退出該群組嗎？',
        ],
        'upload_file' => [
            'label' => '檔案',
        ],
        'upload_media' => [
            'label' => '相片和影片',
        ],
    ],

    'messages' => [

        'cannot_exit_self_or_private_conversation' => '無法退出自我或私人對話',
        'owner_cannot_exit_conversation' => '版主無法退出對話',
        'rate_limit' => '嘗試次數過多！請放慢速度',
        'conversation_not_found' => '未找到對話。',
        'conversation_id_required' => '需要對話編號',
        'invalid_conversation_input' => '無效的對話輸入。',
    ],

    /**-------------------------
     * Info Component
     *------------------------*/

    'info' => [
        'heading' => [
            'label' => '聊天資訊',
        ],
        'actions' => [
            'delete_chat' => [
                'label' => '刪除聊天',
                'confirmation_message' => '您確定要刪除此聊天嗎？這只會刪除您這邊的聊天記錄，而不會刪除其他參與者的聊天記錄。',
            ],
        ],
        'messages' => [
            'invalid_conversation_type_error' => '僅允許私人和自我對話',
        ],

    ],

    /**-------------------------
     * Group Folder
     *------------------------*/

    'group' => [

        // Group info component
        'info' => [
            'heading' => [
                'label' => '群組資訊',
            ],
            'labels' => [
                'members' => '成員',
                'add_description' => '新增群組說明',
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
                'photo' => [
                    'label' => '相片',
                ],
            ],
            'actions' => [
                'delete_group' => [
                    'label' => '刪除群組',
                    'confirmation_message' => '您確定要刪除該群組嗎？',
                    'helper_text' => '刪除群組之前，您需要先刪除所有群組成員。',
                ],
                'add_members' => [
                    'label' => '新增成員',
                ],
                'group_permissions' => [
                    'label' => '群組權限',
                ],
                'exit_group' => [
                    'label' => '退出群組',
                    'confirmation_message' => '您確定要退出群組嗎？',

                ],
            ],
            'messages' => [
                'invalid_conversation_type_error' => '僅允許群組對話',
            ],
        ],
        // Members component
        'members' => [
            'heading' => [
                'label' => '成員',
            ],
            'inputs' => [
                'search' => [
                    'label' => '搜尋',
                    'placeholder' => '搜尋成員',
                ],
            ],
            'labels' => [
                'members' => '成員',
                'owner' => '版主',
                'admin' => '管理員',
                'no_members_found' => '未找到成員',
            ],
            'actions' => [
                'send_message_to_yourself' => [
                    'label' => '訊息給自己',

                ],
                'send_message_to_member' => [
                    'label' => '訊息給:member',

                ],
                'dismiss_admin' => [
                    'label' => '關閉管理員身分',
                    'confirmation_message' => '您確定要關閉:member的管理員身分嗎？',
                ],
                'make_admin' => [
                    'label' => '成為管理員',
                    'confirmation_message' => '您確定要讓:member成為管理員嗎？',
                ],
                'remove_from_group' => [
                    'label' => '移除',
                    'confirmation_message' => '您確定要從該群組中移除:member嗎？',
                ],
                'load_more' => [
                    'label' => '載入更多',
                ],

            ],
            'messages' => [
                'invalid_conversation_type_error' => '僅允許群組對話',
            ],
        ],
        // add-Members component
        'add_members' => [
            'heading' => [
                'label' => '新增成員',
            ],
            'inputs' => [
                'search' => [
                    'label' => '搜尋',
                    'placeholder' => '搜尋',
                ],
            ],
            'labels' => [

            ],
            'actions' => [
                'save' => [
                    'label' => '儲存',

                ],

            ],
            'messages' => [
                'invalid_conversation_type_error' => '僅允許群組對話',
                'members_limit_error' => '成員不能超過 :count 人',
                'member_already_exists' => ' 已加入群組',
            ],
        ],
        // permissions component
        'permisssions' => [
            'heading' => [
                'label' => '權限',
            ],
            'inputs' => [
                'search' => [
                    'label' => '搜尋',
                    'placeholder' => '搜尋',
                ],
            ],
            'labels' => [
                'members_can' => '成員可以',

            ],
            'actions' => [
                'edit_group_information' => [
                    'label' => '編輯群組資訊',
                    'helper_text' => '其中包括名稱、圖示和說明',
                ],
                'send_messages' => [
                    'label' => '傳送訊息',
                ],
                'add_other_members' => [
                    'label' => '新增其他成員',
                ],

            ],
            'messages' => [
            ],
        ],

    ],

];
