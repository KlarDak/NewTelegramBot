<?php
  namespace KlarDak\TelegramBot\Entities;

  class PollOption
  {
    public $text;
    public $voter_count = 0;

    function __construct(array $data)
    {
      $this->text = $data["text"];
      $this->voter_count = $data["voter_count"];

      return true;
    }

    public function getText()
    {
      return $this->text;
    }

    public function getVoterCount()
    {
      return $this->voter_count;
    }
  }
?>
