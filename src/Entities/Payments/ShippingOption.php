<?php
  namespace KlarDak\TelegramBot\Entities\Payments;

  class ShippingOption
  {
    public $id;
    public $title;
    public $prices;

    function __construct(array $data)
    {
      $this->id = $data["id"];
      $this->title = $data["title"];
      $this->prices = $data["prices"];

      return true;
    }

    public function getID()
    {
      return $this->id;
    }

    public function getTitle()
    {
      return $this->title;
    }

    public function getPrices(int $elem = -1)
    {
      if ($elem >= 0)
      {
        return new ShippingOption($this->prices[$elem]);
      }
      else
      {
        return $this->prices;
      }
    }
  }
?>
