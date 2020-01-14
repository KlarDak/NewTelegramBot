<?php
  namespace KlarDak\TelegramBot\Entities;

  class ForceReply
  {
    public $force_reply = true;
    public $selective = false;

    function __construct(array $data)
    {
      $this->force_reply = $data["force_reply"];
      $this->selective = $data["selective"];

      return true;
    }

    public function getForceReply()
    {
      return $this->force_reply;
    }

    public function getSelective()
    {
      return $this->selective;
    }
  }
?>
