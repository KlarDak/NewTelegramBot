<?php
  namespace KlarDak\TelegramBot\Entities;

  class ChatPermissions
  {
    public $can_send_messages = false;
    public $can_send_media_messages = false;
    public $can_send_polls = false;
    public $can_send_other_messages = false;
    public $can_add_web_page_previews = false;
    public $can_change_info = false;
    public $can_invite_users = false;
    public $can_pin_messages = false;

    function __construct(array $data)
    {
      $this->can_send_messages = $data["can_send_messages"];
      $this->can_send_media_messages = $data["can_send_media_messages"];
      $this->can_send_polls = $data["can_send_polls"];
      $this->can_send_other_messages = $data["can_send_other_messages"];
      $this->can_add_web_page_previews = $data["can_add_web_page_previews"];
      $this->can_change_info = $data["can_change_info"];
      $this->can_invite_users = $data["can_invite_users"];
      $this->can_pin_messages = $data["can_pin_messages"];

      return true;
    }

    public function canSendMessage()
    {
      return $this->can_send_messages;
    }

    public function canSendMediaMessages()
    {
      return $this->can_send_media_messages;
    }

    public function canSendPolls()
    {
      return $this->can_send_polls;
    }

    public function canSendOtherMessages()
    {
      return $this->can_send_other_messages;
    }

    public function canAddWebPagePreviews()
    {
      return $this->can_add_web_page_previews;
    }

    public function canChangeInfo()
    {
      return $this->can_change_info;
    }

    public function canInviteUsers()
    {
      return $this->can_invite_users;
    }

    public function canPinMessages()
    {
      return $this->can_pin_messages;
    }
  }
?>
