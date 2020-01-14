<?php
  namespace KlarDak\TelegramBot\Entities;

  class Venue
  {
    public $location;
    public $title;
    public $address;
    public $foursquare_id;
    public $foursquare_type;

    function __construct(array $data)
    {
      $this->location = $data["location"];
      $this->title = $data["title"];
      $this->address = $data["address"];
      $this->foursquare_id = $data["foursquare_id"];
      $this->foursquare_type = $data["foursquare_type"];

      return true;
    }

    public function getLocation()
    {
      return new Location($this->location);
    }

    public function getTitle()
    {
      return $this->title;
    }

    public function getAddress()
    {
      return $this->address;
    }

    public function getFoursquareID()
    {
      return $this->foursquare_id;
    }

    public function getFoursquareType()
    {
      return $this->foursquare_type;
    }
  }
?>
