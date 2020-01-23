<?php
  namespace KlarDak\TelegramBot\Entities;

  class Poll
  {
    public $id;
    public $question;
    public $options;
    public $total_voter_count = 0;
    public $is_closed = false;
    public $is_anonymous = false;
    public $type;
    public $allows_multiple_answers = false;
    public $correct_option_id = 0;

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

    public function getTotalVoterCount()
    {
      return $this->total_voter_count;
    }

    public function isClosed()
    {
      return $this->is_closed;
    }

    public function isAnonymous()
    {
      return $this->is_anonymous;
    }

    public function getType()
    {
      return $this->type;
    }

    public function isAllowsMultipleAnswers()
    {
      return $this->allows_multiple_answers;
    }

    public function getCorrectOptionID()
    {
      return $this->correct_option_id;
    }
  }
?>
