<?php
  namespace KlarDak\TelegramBot\Entities\InlineKeyboardMarkup;

  class InlineKeyboardMarkup
  {
    function __construct(array $keyboard)
    {
      return json_encode(["inline_keyboard" => $keyboard]);
    }
  }
?>
