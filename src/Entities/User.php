<?php
  namespace KlarDak\TelegramBot\Entities;

  class User
  {
    public $id = 0;
    public $is_bot = false;
    public $first_name;
    public $last_name;
    public $username;
    public $language_code;

    function __construct(array $data)
    {
      if ($data["id"] > 0 && $data["first_name"] != null)
      {
          $this->id = $data["id"];
          $this->is_bot = $data["is_bot"];
          $this->first_name = $data["first_name"];
          $this->last_name = $data["last_name"];
          $this->username = $data["username"];
          $this->language_code = $data["language_code"];

          return true;
      }
      else {
        return false;
      }
    }

    public function getID()
    {
      return $this->id;
    }

    public function isBot()
    {
      return $this->is_bot;
    }

    public function getFirstName()
    {
      return $this->first_name;
    }

    public function getLastName()
    {
      return $this->last_name;
    }

    public function getUsername()
    {
      return $this->username;
    }

    public function getLanguageCode()
    {
      return $this->language_code;
    }
  }

?>
