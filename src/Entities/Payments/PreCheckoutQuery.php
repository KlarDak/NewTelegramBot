<?php
  namespace KlarDak\TelegramBot\Entities\Payments;

  class PreCheckoutQuery
  {
    public $id;
    public $from;
    public $currency;
    public $total_amount = 0;
    public $invoice_payload;
    public $shipping_option_id;
    public $order_info;

    public function getID()
    {
      return $this->id;
    }

    public function getFrom()
    {
      return new \KlarDak\TelegramBot\Entities\User($this->from);
    }

    public function getInvoicePayload()
    {
      return $this->invoice_payload;
    }

    public function getShippingAddress()
    {
      return new ShippingAddress($this->shipping_address);
    }
  }
?>
