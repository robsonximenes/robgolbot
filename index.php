<?php
/**
 * Created by PhpStorm.
 * User: robson
 * Date: 30/07/17
 * Time: 19:40
 *
 * @botcoin_the_bot:

395776997:AAH0eB4inE1a1piZJt7yWVkQjLjrpWdyLC4
 *
 *
 */
require_once "vendor/autoload.php";

$GLOBALS["BOT_API_TOKEN"] = "395776997:AAH0eB4inE1a1piZJt7yWVkQjLjrpWdyLC4";


try {
    $bot = new \TelegramBot\Api\Client(BOT_API_TOKEN);
    // or initialize with botan.io tracker api key
    // $bot = new \TelegramBot\Api\Client('YOUR_BOT_API_TOKEN', 'YOUR_BOTAN_TRACKER_API_KEY');


    $bot->command('ping', function ($message) use ($bot) {
        $bot->sendMessage($message->getChat()->getId(), 'pong!');
    });

    $bot->run();

} catch (\TelegramBot\Api\Exception $e) {
    $e->getMessage();
}
