<?php

namespace App\Console\Commands;

use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;

class RealPidorCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = "realpidor";

    /**
     * @var string Command Description
     */
    protected $description = "Эта команда поможет выявить настоящего пидора в этом чате";

    /**
     * @inheritdoc
     */
    public function handle($arguments)
    {
        $this->replyWithMessage(['text' => 'расчехляем алгортимы проверки на пидора...']);
        $this->replyWithMessage(['text' => 'идет сканирование чата...']);
        $this->replyWithMessage(['text' => 'Итак, настоящий пидор чата DreamTeam:']);
        $this->replyWithMessage(['text' => 'Олег Максимов!!!']);
        $this->replyWithChatAction(['action' => Actions::TYPING]);
    }
}
