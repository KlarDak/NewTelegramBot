<?php
  namespace KlarDak\TelegramBot\Entities;

  class Document extends MediaEntity
  {
    public $thumb = [];
    public $file_name;

    function __construct(array $data)
    {
      $this->thumb = $data["thumb"];
      $this->file_name = $data["file_name"];

      return true;
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
