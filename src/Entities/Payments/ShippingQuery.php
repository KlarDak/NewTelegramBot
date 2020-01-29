<?php
  namespace KlarDak\TelegramBot\Entities\Payments;

  class ShippingQuery
  {
    public $id;
    public $from;
    public $invoice_payload;
    public $shipping_address;

    function __construct(array $data)
    {
      $this->id = $data["id"];
      $this->from = $data["from"];
      $this->invoice_payload = $data["invoice_payload"];
      $this->shipping_address = $data["shipping_address"];

      return true;
    }

    public function getID()
    {
      return $this->id;
    }

    public function getFrom()
    {
      return new \KlarDak\TelegramBot\Entities\User($this->from);
    }

    public function getCurrency()
    {
      return $this->currency;
    }

    public function getTotalAmount()
    {
      return $this->total_amount;
    }

    public function getInvoicePayload()
    {
      return $this->invoice_payload;
    }

    public function getShippingOptionID()
    {
      return $this->shipping_option_id;
    }

    public function getOrderInfo()
    {
      return new OrderInfo($this->order_info);
    }
  }
?>
