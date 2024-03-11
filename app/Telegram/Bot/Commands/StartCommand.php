<?php

namespace App\Telegram\Bot\Commands;

use Illuminate\Support\Facades\Log;
use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;

class StartCommand extends Command
{
    protected string $name = 'start';
    protected string $description = 'Start Command to get you started';

    public function handle()
    {
        $chat = $this->getUpdate()->getChat();
        Log::debug($chat);

        $this->replyWithChatAction(['action' => Actions::TYPING]);

        $this->replyWithMessage([
            'text' => "Olá, boas vindas ao LaraBot! Para poder te enviar atualizações, use <code>/token &lt;token&gt;</code> gerado no Lara.",
            'parse_mode' => 'HTML'
        ]);
    }
}
