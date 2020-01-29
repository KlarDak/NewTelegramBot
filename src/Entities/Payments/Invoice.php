<?php
  namespace KlarDak\TelegramBot\Entities\Payments;

  class Invoice
  {
    public $title;
    public $description;
    public $start_parameter;
    public $currency;
    public $total_amount = 0;

    function __construct(array $data)
    {
      $this->title = $data["title"];
      $this->description = $data["description"];
      $this->start_parameter = $data["start_parameter"];
      $this->currency = $data["currency"];
      $this->total_amount = $data["total_amount"];

      return true;
    }

    public function getTitle()
    {
      return $this->title;
    }

    public function getDescription()
    {
      return $this->descriprion;
    }

    public function getStartParameter()
    {
      return $this->start_parameter;
    }

    public function getCurrency()
    {
      return $this->currency;
    }

    public function getTotalAmount()
    {
      return $this->total_amount;
    }
  }
?>
