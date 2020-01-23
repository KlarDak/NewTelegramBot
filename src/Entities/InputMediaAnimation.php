<?php
  namespace KlarDak\TelegramBot\Entities;

  class InputMediaAnimation
  {
    public $type;
    public $media;
    public $thumb;
    public $caption;
    public $parse_mode;
    public $width = 0;
    public $height = 0;
    public $duration = 0;

    function __construct(array $data)
    {
      $this->type = $data["type"];
      $this->media = $data["media"];
      $this->thumb = $data["thumb"];
      $this->caption = $data["caption"];
      $this->parse_mode = $data["parse_mode"];
      $this->width = $data["width"];
      $this->height = $data["height"];
      $this->duration = $data["duration"];

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

    public function getWidth()
    {
      return $this->width;
    }

    public function getHeight()
    {
      return $this->height;
    }

    public function getDuration()
    {
      return $this->duration;
    }
  }
?>
