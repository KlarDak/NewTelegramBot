<?php
  namespace KlarDak\TelegramBot\Entities\InlineKeyboardMarkup;

  class InlineKeyboardButton
  {
    function __construct(array $data)
    {
      return $data;
    }

    public function addButton(string $text, string $url, array $login_url, string $callback_data, string $switch_inline_query, string $switch_inline_query_current_chat, array $callback_game = null, bool $pay = false)
    {
      return [
        "text" => $text,
        "url" => $url,
        "login_url" => $login_url,
        "callback_data" => $callback_data,
        "switch_inline_query" => $switch_inline_query,
        "switch_inline_query_current_chat" => $switch_inline_query_current_chat,
        "callback_game" => $callback_game,
        "pay" => $pay
      ];
    }
  }
?>
