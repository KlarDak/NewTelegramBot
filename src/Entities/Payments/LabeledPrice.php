<?php
  namespace KlarDak\TelegramBot\Entities\Payments;

  class LabeledPrice
  {
    public $label;
    public $amount = 0;

    function __construct(array $data)
    {
      $this->label = $data["label"];
      $this->amount = $data["amount"];

      return true;
    }

    public function getLabel()
    {
      return $this->label;
    }

    public function getAmount()
    {
      return $this->amount;
    }
  }
?>
