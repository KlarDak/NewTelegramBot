<?php
  namespace KlarDak\TelegramBot\Entities;

  class PhotoSize extends MediaEntity
  {
    public $width = 0;
    public $height = 0;

    function __construct(array $data)
    {
      parent::__construct($data);
      $this->width = $data["width"];
      $this->height = $data["height"];

      return true;
    }

    public function getWidth()
    {
      return $this->width;
    }

    public function getHeight()
    {
      return $this->height;
    }
  }

?>
