<?php
  namespace KlarDak\TelegramBot\Entities\Payments;

  class OrderInfo
  {
    public $name;
    public $phone_number;
    public $email;
    public $shipping_address;

    function __construct(array $data)
    {
      $this->name = $data["name"];
      $this->phone_number = $data["phone_number"];
      $this->email = $data["email"];
      $this->shipping_address = $data["shipping_address"];

      return true;
    }

    public function getName()
    {
      return $this->name;
    }

    public function getPhoneNumber()
    {
      return $this->phone_number;
    }

    public function getEmail()
    {
      return $this->email;
    }

    public function getShippingAddress()
    {
      return new ShippingAddress($this->shipping_address);
    }
  }
?>
