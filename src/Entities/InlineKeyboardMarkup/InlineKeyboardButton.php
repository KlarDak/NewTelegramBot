<?php
  namespace KlarDak\TelegramBot\Entities\InlineKeyboardMarkup;

  class InlineKeyboardButton
  {
    public static function Button(string $text, string $url = null, array $login_url = null, string $callback_data = null, string $switch_inline_query = null, string $switch_inline_query_current_chat = null, array $callback_game = null, bool $pay = false)
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
