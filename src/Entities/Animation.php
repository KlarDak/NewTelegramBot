<?php
  namespace KlarDak\TelegramBot\Entities;

  class Animation extends MediaEntity
  {
    public $width = 0;
    public $height = 0;
    public $duration = 0;
    public $thumb = [];
    public $file_name;

    function __construct(array $data)
    {
      if (($data["file_id"] && $data["file_unique_id"]) != null && ($data["width"] && $data['height']) > 0 && $data["duration"] >= 0)
      {
        parent::__construct($data);
        $this->width = $data["width"];
        $this->height = $data["height"];
        $this->duration = $data["duration"];
        $this->thumb = $data["thumb"];
        $this->file_name = $data["file_name"];

        return true;
      }
      else
      {
        return false;
      }
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

    public function getThumb()
    {
      return new PhotoSize($this->thumb);
    }

    public function getFileName()
    {
      return $this->file_name;
    }
  }
?>
