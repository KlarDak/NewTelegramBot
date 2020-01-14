<?php
  namespace KlarDak\TelegramBot\Entities;

  class MediaEntity
  {
    public $file_id;
    public $file_unique_id;
    public $mime_type;
    public $file_size = 0;

    function __construct(array $data)
    {
      $this->file_id = $data["file_id"];
      $this->file_unique_id = $data["file_unique_id"];
      $this->mime_type = $data["mime_type"];
      $this->file_size = $data["file_size"];
    }

    public function getFileID()
    {
      return $this->file_id;
    }

    public function getFileUniqueID()
    {
      return $this->file_unique_id;
    }

    public function getMimeType()
    {
      return $this->mime_type;
    }

    public function getFileSize()
    {
      return $this->file_size;
    }
  }

?>
