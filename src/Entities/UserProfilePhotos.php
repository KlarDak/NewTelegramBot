<?php
  namespace KlarDak\TelegramBot\Entities;

  class UserProfilePhotos
  {
    public $total_count = 0;
    public $photos;

    function __construct(array $data)
    {
      $this->total_count = $data["total_count"];
      $this->photos = $data["photos"];
    }

    public function getTotalCount()
    {
      return $this->total_count;
    }

    public function getPhotos(int $elem = -1)
    {
      if ($elem >= 0)
      {
        return new Photos($this->photos[$elem]);
      }
      else {
        return $this->photos;
      }
    }
  }
?>
