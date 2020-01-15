<?php
  namespace KlarDak\TelegramBot\Entities\KeyboardMarkup;

  class ReplyKeyboardMarkup
  {
    public static function getKeyboard(array $keyboard, bool $resize_keyboard = false, bool $one_time_keyboard = false, bool $selective = false)
    {
      return json_encode(["keyboard" => $keyboard, "resize_keyboard" => $resize_keyboard, "one_time_keyboard" => $one_time_keyboard, "selective" => $selective]);
    }
  }
?>
