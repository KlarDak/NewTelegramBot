<?php
  namespace KlarDak\TelegramBot\Entities\InlineKeyboardMarkup;

  class InlineKeyboardMarkup
  {
    public static function getKeyboard(array $keyboard)
    {
      return json_encode(["inline_keyboard" => $keyboard]);
    }
  }
?>
