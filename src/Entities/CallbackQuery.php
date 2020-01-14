<?php
  namespace KlarDak\TelegramBot\Entities;

  class CallbackQuery
  {
    public $id;
    public $from;
    public $message;
    public $inline_message_id;
    public $chat_instance;
    public $data;
    public $game_short_name;

    function __construct(array $data)
    {
      $this->id = $data["id"];
      $this->from = $data["from"];
      $this->message = $data["message"];
      $this->inline_message_id = $data["inline_message_id"];
      $this->chat_instance = $data["chat_instance"];
      $this->data = $data["data"];
      $this->game_short_name = $data["game_short_name"];

      return true;
    }

    public function getID()
    {
      return $this->id;
    }

    public function getFrom()
    {
      return new User($this->from);
    }

    public function getMessage()
    {
      return new Message($this->message);
    }

    public function getInlineMessageID()
    {
      return $this->inline_message_id;
    }

    public function getChatInstance()
    {
      $this->chat_instance;
    }

    public function getData()
    {
      return $this->data;
    }

    public function getGameShortName()
    {
      return $this->game_short_name;
    }
  }

?>
