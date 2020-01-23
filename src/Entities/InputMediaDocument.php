<?php
  namespace KlarDak\TelegramBot\Entities;

  class InputMediaDocument
  {
    public $type;
    public $media;
    public $thumb;
    public $caption;
    public $parse_mode;

    function __construct(array $data)
    {
      $this->type = $data["type"];
      $this->media = $data["media"];
      $this->thumb = $data["thumb"];
      $this->caption = $data["caption"];
      $this->parse_mode = $data["parse_mode"];

      return true;
    }

    public function getType()
    {
      return $this->type;
    }

    public function getMedia()
    {
      return $this->media;
    }

    public function getThumb()
    {
      return $this->thumb;
    }

    public function getCaption()
    {
      return $this->caption;
    }

    public function getParseMode()
    {
      return $this->parse_mode;
    }
  }
?>
