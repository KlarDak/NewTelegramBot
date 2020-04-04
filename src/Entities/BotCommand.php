<?php
  namespace KlarDak\TelegramBot\Entities;

  class BotCommand
  {
    public $command = "";
    public $description = "";

    function __construct(array $data)
    {
      $this->command = $data["command"];
      $this->description = $data["description"];

      return true;
    }

    public function getCommand()
    {
      return $this->command;
    }

    public function getDescription()
    {
      return $this->description;
    }
  }
?>
