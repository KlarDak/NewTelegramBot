<?php
  namespace KlarDak\TelegramBot\Entities\ReplyKeyboardMarkup;

  class KeyboardButton
  {
    function __construct(string $text, bool $request_contact = false, bool $request_location = false)
    {
      return ["text" => $text, "request_contact" => $request_contact, "request_location" => $request_location];
    }

    public function addButton(array $data)
    {
      return $data;
    }
  }
?>
