<?php
  namespace KlarDak\TelegramBot\Entities\Payments;

  class ShippingAddress
  {
    public $country_code;
    public $state;
    public $city;
    public $street_line1;
    public $street_line2;
    public $post_code;

    function __construct(array $data)
    {
      $this->country_code = $data["country_code"];
      $this->state = $data["state"];
      $this->city = $data["city"];
      $this->street_line1 = $data["street_line1"];
      $this->street_line2 = $data["street_line2"];
      $this->post_code = $data["post_code"];

      return true;
    }

    public function getCountryCode()
    {
      return $this->country_code;
    }

    public function getState()
    {
      return $this->state;
    }

    public function getCity()
    {
      return $this->city;
    }

    public function getStreetLine1()
    {
      return $this->street_line1;
    }

    public function getStreetLine2()
    {
      return $this->street_line2;
    }

    public function getPostCode()
    {
      return $this->post_code;
    }
  }
?>
