<?php

namespace App\Console\Commands;

use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;

class RealPidorCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = "real-pidor";

    /**
     * @var string Command Description
     */
    protected $description = "Эта команда поможет выявить настоящего пидора в этом чате";

    /**
     * @inheritdoc
     */
    public function handle($arguments)
    {
        $this->replyWithMessage(['text' => '__расчехляем алгортимы проверки на пидора...__']);
        $this->replyWithChatAction(['action' => Actions::TYPING]);
    }
}
