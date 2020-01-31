<?php
  namespace KlarDak\TelegramBot\Entities;

  class Update
  {
    public $update_obj;

    function __construct(array $data)
    {
      $this->update_obj = $data;
      return true;
    }

    public function getUpdateID()
    {
      return $this->update_obj["update_id"];
    }

    public function getMessage()
    {
      return new Message($this->update_obj["message"]);
    }

    public function getEditedMessage()
    {
      return new Message($this->update_obj["edited_message"]);
    }

    public function getChannelPost()
    {
      return new Message($this->update_obj["channel_post"]);
    }

    public function getEditedChannelPost()
    {
      return new Message($this->update_obj["edited_channel_post"]);
    }

    public function getInlineQuery()
    {
      return new InlineQuery($this->update_obj["inline_query"]);
    }

    public function getChosenInlineResult(){} // TODO: Coming soon...

    public function getCallbackQuery()
    {
      return new CallbackQuery($this->update_obj["callback_query"]);
    }

    public function getShippingQuery(){
      return new Payments\ShippingQuery($this->update_obj["shipping_query"]);
    } // TODO: Coming soon too...

    public function getPreCheckoutQuery(){
      return new Payments\PreCheckoutQuery($this->update_obj["pre_checkout_query"]);
    }

    public function getPoll()
    {
      return new Poll($this->update_obj["poll"]);
    }

    public function getPollAnswer()
    {
      return new PollAnswer($this->update_obj["poll_answer"]);
    }
  }
?>
