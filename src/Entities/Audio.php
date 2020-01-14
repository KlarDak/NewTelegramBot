<?php
  namespace KlarDak\TelegramBot\Entities;

  class Audio extends MediaEntity
  {
    public $duration = 0;
    public $performer;
    public $title;
    public $thumb = [];

    function __construct(array $data)
    {
      parent::__construct($data);
      $this->duration = $data["duration"];
      $this->performer = $data["performer"];
      $this->title = $data["title"];
      $this->thumb = $data["thumb"];

      return true;
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

    public function getThumb()
    {
      return new PhotoSize($this->thumb);
    }
  }
?>
