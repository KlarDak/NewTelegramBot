<?php
  namespace KlarDak\TelegramBot\Entities;

  class File extends MediaEntity
  {
    public $file_path;

    function __construct(array $data)
    {
      parent::__construct($data);
      $this->file_path = $data["file_path"];

      return true;
    }

    public function getFilePath()
    {
      return $this->file_path;
    }
  }

?>
