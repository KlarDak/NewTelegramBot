<?php
  namespace KlarDak\TelegramBot\Entities;

  class Dice
  {
    $value = 0;

    function __construct(array $data)
    {
      $this->value = $data["value"];

      return true;
    }

    public function getValue()
    {
      return $this->value;
    }
  }
?>
