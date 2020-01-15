<?php
  namespace KlarDak\TelegramBot\Entities\KeyboardMarkup;

  class KeyboardButton
  {
    public static function Button(string $text, bool $request_contact = false, bool $request_location = false)
    {
      return ["text" => $text, "request_contact" => $request_contact, "request_location" => $request_location];
    }
  }
?>
