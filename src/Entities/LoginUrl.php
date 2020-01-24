<?php
  namespace KlarDak\TelegramBot\Entities;

  class LoginUrl
  {
    public $url = "";
    public $forward_text = "";
    public $bot_username = "";
    public $request_write_access = false;

    function __construct(array $data)
    {
      $this->url = $data["url"];
      $this->forward_text = $data["forward_text"];
      $this->bot_username = $data["bot_username"];
      $this->request_write_access = $data["request_write_access"];

      return true;
    }

    public function getUrl()
    {
      return $this->url;
    }

    public function getForwardText()
    {
      return $this->forward_text;
    }

    public function getBotUsername()
    {
      return $this->bot_username;
    }

    public function isRequestWriteAccess()
    {
      return $this->request_write_access;
    }
  }
?>
