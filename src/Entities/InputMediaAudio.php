<?php
  namespace KlarDak\TelegramBot\Entities;

  class InputMediaAudio
  {
    public $type;
    public $media;
    public $thumb;
    public $caption;
    public $parse_mode;
    public $duration = 0;
    public $performer;
    public $title;

    function __construct(array $data)
    {
      $this->type = $data["type"];
      $this->media = $data["media"];
      $this->thumb = $data["thumb"];
      $this->caption = $data["caption"];
      $this->parse_mode = $data["parse_mode"];
      $this->duration = $data["duration"];
      $this->performer = $data["performer"];
      $this->title = $data["title"];

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

    public function getDuration()
    {
      return $this->duration;
    }

    public function getPerformer()
    {
      return $this->performer;
    }

    public function getTitle()
    {
      return $this->title;
    }
  }
?>
