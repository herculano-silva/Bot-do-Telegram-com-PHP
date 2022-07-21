<?php

namespace App\Comunication;

use TelegramBot\Api\BotApi;


class Alert{
    /**
     * token de acesso ao bot
     * @var String
    */
    const TELEGRAM_BOT_TOKEN = '';

    /**
     * ID da conversa com bot
     * @var String
    */
    const TELEGRAM_CHAT_ID = ;

    /**
     * Método responsável por enviar a mensagem de alerta
     * @var String
     * @return boolean
    */
    public static function sendMessage($message){
        // INSTANCIA DO BOT COM O TOKEN GERADO
        $obBotApi = new BotApi(self::TELEGRAM_BOT_TOKEN);

        // ENVIA A MENSAGEM PARA O TELEGRAM
        return $obBotApi->sendMessage(self::TELEGRAM_CHAT_ID,$message);
    }
}