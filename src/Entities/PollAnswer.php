<?php
  namespace KlarDak\TelegramBot\Entities;

  class PollAnswer
  {
    public $poll_id = "";
    public $user;
    public $option_ids;

    function __construct(array $data)
    {
      $this->poll_id = $data["poll_id"];
      $this->user = $data["user"];
      $this->option_ids = $data["option_ids"];

      return true;
    }

    public function getPollID()
    {
      return $this->poll_id;
    }

    public function getUser()
    {
      return new User($this->user);
    }

    public function getOptionIDs()
    {
      return $this->option_ids;
    }
  }
?>
