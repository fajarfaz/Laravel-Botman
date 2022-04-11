<?php
use App\Http\Controllers\BotmanController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('gase!');
});
$botman->hears('Start conversation', BotmanController::class.'@startConversation');
