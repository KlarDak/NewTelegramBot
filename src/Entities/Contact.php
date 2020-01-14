<?php
  namespace KlarDak\TelegramBot\Entities;

  class Contact
  {
      public $phone_number;
      public $first_name;
      public $last_name;
      public $user_id;
      public $vcard;

      function __construct(array $data)
      {
        $this->phone_number = $data["phone_number"];
        $this->first_name = $data["first_name"];
        $this->last_name = $data["last_name"];
        $this->user_id = $data["user_id"];
        $this->vcard = $data["vcard"];

        return true;
      }

      public function getPhoneNumber()
      {
        return $this->phone_number;
      }

      public function getFirstName()
      {
        return $this->first_name;
      }

      public function getLastName()
      {
        return $this->last_name;
      }

      public function getUserID()
      {
        return $this->user_id;
      }

      public function getVCard()
      {
        return $this->vcard;
      }
  }
?>
