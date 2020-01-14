<?php
  namespace KlarDak\TelegramBot\Entities\ReplyKeyboardMarkup;

  class ReplyKeyboardRemove
  {
    function __construct(bool $remove_keyboard, bool $selective = false)
    {
      return json_encode(["remove_keyboard" => $remove_keyboard, "selective" => $selective]);
    }
  }
?>
