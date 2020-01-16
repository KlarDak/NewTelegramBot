<?php
  namespace KlarDak\TelegramBot;

  class Action
  {
    private $token = "";

    function __construct()
    {
      $this->token = $token;

      return true;
    }

    public function sendMessage(mixed $chat_id, string $text, string $reply_markup, string $parse_mode = null, bool $disable_web_page_preview = false, bool $disable_notification = false, int $reply_to_message_id = null)
    {
      return self::doAction("sendMessage", [
        "chat_id" => $chat_id,
        "text" => $text,
        "reply_markup" => $reply_markup,
        "parse_mode" => $parse_mode,
        "disable_web_page_preview" => $disable_web_page_preview,
        "disable_notification" => $disable_notification,
        "reply_to_message_id" => $reply_to_message_id,
      ]);
    }

    public function sendPhoto(mixed $chat_id, mixed $photo, string $caption, string $reply_markup, string $parse_mode = null, bool $disable_web_page_preview = false, bool $disable_notification = false, int $reply_to_message_id = null)
    {
      return self::doAction("sendPhoto", [
        "chat_id" => $chat_id,
        "photo" => $photo,
        "caption" => $caption,
        "reply_markup" => $reply_markup,
        "parse_mode" => $parse_mode,
        "disable_web_page_preview" => $disable_web_page_preview,
        "disable_notification" => $disable_notification,
        "reply_to_message_id" => $reply_to_message_id,
      ]);
    }

    private function doAction(string $type, array $data)
    {
      $doaction = curl_init("https://api.telegram.org/bot". Methods::$token ."/". $type);
      curl_setopt($doaction, CURLOPT_POST, 1);
      curl_setopt($doaction, CURLOPT_POSTFIELDS, $data);
      curl_setopt($doaction, CURLOPT_RETURNTRANSFER, 1);
      $result = curl_exec($doaction);
      curl_close($doaction);

      return $result;
    }
  }
?>
