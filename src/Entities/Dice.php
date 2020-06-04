<?php
  namespace KlarDak\TelegramBot\Entities;

  class Dice
  {
    $emoji = "";
    $value = 0;

    function __construct(array $data)
    {
      $this->value = $data["value"];

      return true;
    }

    public function getEmoji()
    {
      return $this->emoji;
    }

    public function getValue()
    {
      return $this->value;
    }
  }
?>
