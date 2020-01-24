<?php
  namespace KlarDak\TelegramBot\Entities;

  class MessageEntity
  {
    public $type = "";
    public $offset = 0;
    public $length = 0;
    public $url = "";
    public $user;
    public $language = "";

    function __construct(array $data)
    {
      $this->type = $data["type"];
      $this->offset = $data["offset"];
      $this->length = $data["length"];
      $this->url = $data["url"];
      $this->user = $data["user"];
      $this->language = $data["language"];

      return true;
    }

    public function getType()
    {
      return $this->type;
    }

    public function getOffset()
    {
      return $this->offset;
    }

    public function getLength()
    {
      return $this->length;
    }

    public function getUrl()
    {
      return $this->url;
    }

    public function getUser()
    {
      return new User($this->user);
    }

    public function getLanguage()
    {
      return $this->language;
    }
  }

?>
