<?php
  namespace KlarDak\TelegramBot\Entities;

  class Photos
  {
    public $photos = [];

    function __construct(array $data)
    {
      $this->photos = $data;

      return true;
    }

    public function getOneSize(int $elem = -1)
    {
      if ($elem >= 0)
      {
        return new PhotoSize($this->photos[$elem]);
      }
      else {
        return $this->photos;
      }
    }
  }
?>
