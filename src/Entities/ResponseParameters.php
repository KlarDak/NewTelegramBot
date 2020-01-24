<?php
  namespace KlarDak\TelegramBot\Entities;

  class ResponseParameters
  {
    public $migrate_to_chat_id = 0;
    public $retry_after = 0;

    function __construct(array $data)
    {
      $this->migrate_to_chat_id = $data["migrate_to_chat_id"];
      $this->retry_after = $data["retry_after"];

      return true;
    }

    public function getMigrateToChatID()
    {
      return $this->migrate_to_chat_id;
    }

    public function getRetryAfter()
    {
      return $this->retry_after;
    }
  }
?>
