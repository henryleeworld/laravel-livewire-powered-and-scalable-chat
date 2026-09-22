<?php

namespace App\Providers\Wirechat;

use Wirechat\Wirechat\Panel;
use Wirechat\Wirechat\PanelProvider;

class ChatsPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
             ->id('chats')
             ->path('chats')
             ->middleware(['web','auth'])
             ->default()
             ->attachments()
             ->createChatAction()
             ->createGroupAction()
             ->deleteChatAction()
             ->emojiPicker()
             ->maxGroupMembers(1000)
             ->mediaMaxUploadSize(12288) // 12 MB
             ->mediaMimes(['png', 'jpg', 'jpeg', 'gif', 'mov', 'mp4']);
    }
}
