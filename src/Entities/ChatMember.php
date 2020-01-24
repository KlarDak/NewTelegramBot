<?php
  namespace KlarDak\TelegramBot\Entities;

  class ChatMember
  {
    public $data;

    function __construct(array $data)
    {
      $this->data = $data;

      return true;
    }

    public function getUser()
    {
      return new User($this->data["user"]);
    }

    public function getStatus()
    {
      return $this->data["status"];
    }

    public function getCustomTitle()
    {
      return $this->data["custom_title"];
    }

    public function getUntilDate()
    {
      return $this->data["until_date"];
    }

    public function canBeEdited()
    {
      return $this->data["can_be_edited"];
    }

    public function canPostMessages()
    {
      return $this->data["can_post_messages"];
    }

    public function canEditMessages()
    {
      return $this->data["can_edit_messages"];
    }

    public function canDeleteMessages()
    {
      return $this->data["can_delete_messages"];
    }

    public function canRestrictMembers()
    {
      return $this->data["can_restrict_members"];
    }

    public function canPromoteMembers()
    {
      return $this->data["can_promote_members"];
    }

    public function canChangeInfo()
    {
      return $this->data["can_change_info"];
    }

    public function canInviteUsers()
    {
      return $this->data["can_invite_users"];
    }

    public function canPinMessages()
    {
      return $this->data["can_pin_messages"];
    }

    public function isMember()
    {
      return $this->data["is_member"];
    }

    public function canSendMessages()
    {
      return $this->data["can_send_messages"];
    }

    public function canSendMediaMessages()
    {
      return $this->data["can_send_media_messages"];
    }

    public function canSendPolls()
    {
      return $this->data["can_send_polls"];
    }

    public function canSendOtherMessages()
    {
      return $this->data["can_send_other_messages"];
    }

    public function canAddWebPagePreviews()
    {
      return $this->data["can_add_web_page_previews"];
    }
  }
?>
