<?php
  namespace KlarDak\TelegramBot\Entities;

  class Poll
  {
    public $id;
    public $question;
    public $options;
    public $is_closed = false;

    function __construct(array $data)
    {
      $this->id = $data["id"];
      $this->question = $data["question"];
      $this->options = $data["options"];
      $this->is_closed = $data["is_closed"];

      return true;
    }

    public function getID()
    {
      return $this->id;
    }

    public function getQuestion()
    {
      return $this->question;
    }

    public function getOptions(int $elemarray = null)
    {
      if ($elemarray == null)
      {
        return $this->options;
      }
      elseif ($elemarray >= 0)
      {
        return PollOption($this->options[$elemarray]);
      }
    }

    public function isClosed()
    {
      return $this->is_closed;
    }
  }
?>
