<?php
  namespace KlarDak\TelegramBot\Entities;

  class Location
  {
    public $longitude;
    public $latitude;

    function __construct(array $data)
    {
      $this->longitude = $data["longitude"];
      $this->latitude = $data["latitude"];

      return true;
    }

    public function getLongitude()
    {
      return $this->longitude;
    }

    public function getLatitude()
    {
      return $this->latitude;
    }
  }

?>
