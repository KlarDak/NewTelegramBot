<?php
  namespace KlarDak\TelegramBot\Entities\Payments;

  class SuccessfulPayment
  {
    public $currency;
    public $total_amount = 0;
    public $invoice_payload;
    public $shipping_option_id;
    public $order_info;
    public $telegram_payment_charge_id;
    public $provider_payment_charge_id;

    function __construct(array $data)
    {
      $this->currency = $data["currency"];
      $this->total_amount = $data["total_amount"];
      $this->invoice_payload = $data["invoice_payload"];
      $this->shipping_option_id = $data["shipping_option_id"];
      $this->order_info = $data["order_info"];
      $this->telegram_payment_charge_id = $data["telegram_payment_charge_id"];
      $this->provider_payment_charge_id = $data["provider_payment_charge_id"];

      return true;
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

    public function getTelegramPaymentChargeID()
    {
      return $this->telegram_payment_charge_id;
    }

    public function getProviderPaymentChargeID()
    {
      return $this->provider_payment_charge_id;
    }
  }
?>
