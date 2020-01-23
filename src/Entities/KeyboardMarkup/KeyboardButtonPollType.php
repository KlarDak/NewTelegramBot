<?php
  namespace KlarDak\TelegramBot\Entities\KeyboardMarkup;

  class KeyboardButtonPollType
  {
    public $type = "";

    function __construct(array $data)
    {
      $this->type = $data["type"];
    }

    public function getType()
    {
      return $this->type;
    }
  }

?>
