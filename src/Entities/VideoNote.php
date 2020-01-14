<?php
  namespace KlarDak\TelegramBot\Entities;

  class VideoNote
  {
    public $file_id = 0;
    public $length = 0;
    public $duration = 0;
    public $thumb = [];
    public $file_size = 0;

    function __construct(array $data)
    {
      $this->file_id = $data["file_id"];
      $this->length = $data["length"];
      $this->duration = $data["duration"];
      $this->thmb = $data["thumb"];
      $this->file_size = $data["file_size"];

      return true;
    }

    public function getLength()
    {
      return $this->length;
    }

    public function getDuration()
    {
      return $this->duration;
    }

    public function getFileID()
    {
      return $this->file_id;
    }

    public function getFileSize()
    {
      return $this->file_size;
    }

    public function getThumb()
    {
      return new PhotoSize($this->thumb);
    }
  }

?>
