<?php
  namespace KlarDak\TelegramBot\Entities\ReplyKeyboardMarkup;

  class ReplyKeyboardMarkup
  {
    public $keyboard = [];
    public $resize_keyboard = false;
    public $one_time_keyboard = false;
    public $selective = false;

    function __construct(array $keyboard, bool $resize_keyboard = false, bool $one_time_keyboard = false, bool $selective = false){
      return json_encode(["keyboard" => $keyboard, "resize_keyboard" => $resize_keyboard, "one_time_keyboard" => $one_time_keyboard, "selective" => selective]);
    }
  }
?>
