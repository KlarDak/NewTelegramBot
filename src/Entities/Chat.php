<?php
  namespace KlarDak\TelegramBot\Entities;

  class Chat
  {
    public $id = 0;
    public $type;
    public $title;
    public $username;
    public $first_name;
    public $last_name;
    public $photo = [];
    public $description;
    public $invite_link;
    public $pinned_message = [];
    public $slow_mode_delay = 0;
    public $sticker_set_name;
    public $can_set_sticker_set = true;

    function __construct(array $data)
    {
      if ($data["id"] > 0 && $data["type"] != null)
      {
        $this->id = $data["id"];
        $this->type = $data["type"];
        $this->title = $data["title"];
        $this->username = $data["username"];
        $this->first_name = $data["first_name"];
        $this->last_name = $data["last_name"];
        $this->photo = $data["photo"];
        $this->description = $data["description"];
        $this->invite_link = $data["invite_link"];
        $this->pinned_message = $data["pinned_message"];
        $this->slow_mode_delay = $data["slow_mode_delay"];
        $this->sticker_set_name = $data["sticker_set_name"];
        $this->can_set_sticker_set = $data["can_set_sticker_set"];

        return true;
      }
      else
      {
          return false;
      }
    }

    public function getID()
    {
      return $this->id;
    }

    public function getType()
    {
      return $this->type;
    }

    public function getTitle()
    {
      return $this->title;
    }

    public function getUsername()
    {
      return $this->username;
    }

    public function getFirstName()
    {
      return $this->first_name;
    }

    public function getLastName()
    {
      return $this->last_name;
    }

    public function getPhoto(); // TODO: add new Entity for array with photos;

    public function getDescription()
    {
      return $this->description;
    }

    public function getInviteLink()
    {
      return $this->invite_link;
    }

    public function getPinnedMessage(){} // TODO: add new Entity with Message data;

    public function getPermission(){} // TODO: Yes, you need to add new Entity with getPermission;

    public function getSlowModeDelay()
    {
      return $this->slow_mode_delay;
    }

    public function getStickerSetName(){
      return $this->sticker_set_name;
    }

    public function canSetStickerSet()
    {
      return $this->can_set_sticker_set;
    }
  }

?>
