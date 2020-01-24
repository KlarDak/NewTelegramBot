<?php
  namespace KlarDak\TelegramBot\Entities;

  class Message
  {
    public $data = [];

    function __construct(array $data)
    {
      $this->data = $data;

      return true;
    }

    public function getMessageID()
    {
      return $this->data["message_id"];
    }

    public function getFrom()
    {
      return new User($this->data["from"]);
    }

    public function getDate()
    {
      return $this->data["date"];
    }

    public function getChat()
    {
      return new Chat($this->data["chat"]);
    }

    public function getForwardFrom()
    {
      return new User($this->data["forward_from"]);
    }

    public function getForwardFromChat()
    {
      return new Chat($this->data["forward_from_chat"]);
    }

    public function getForwardFromMessageID()
    {
      return $this->data["forward_from_message_id"];
    }

    public function getForwardSignature()
    {
      return $this->data["forward_signature"];
    }

    public function getForwardSenderName()
    {
      return $This->data["forward_sender_name"];
    }

    public function getForwardDate()
    {
      return $this->data["forward_date"];
    }

    public function getReplyToMessage()
    {
      return new Message($this->data["reply_to_message"]);
    }

    public function getEditDate()
    {
      return $this->data["edit_date"];
    }

    public function getMediaGroupID()
    {
      return $this->data["media_group_id"];
    }

    public function getAuthorSignature()
    {
      return $this->data["author_signature"];
    }

    public function getText()
    {
      return $this->data["text"];
    }

    public function getEntities()
    {
      return new MessageEntity($this->data["entities"]);
    }

    public function getCaptionEntities()
    {
      return new MessageEntity($this->data["caption_entities"]);
    }

    public function getAudio()
    {
      return new Audio($this->data["audio"]);
    }

    public function getDocument()
    {
      return new Document($this->data["document"]);
    }

    public function getAnimation()
    {
      return new Animation($this->data["animation"]);
    }

    public function getPhoto(int $elemarray = null)
    {
      if ($elemarray == null){
        return $this->data["photo"];
      }
      elseif ($elemarray >= 0){
        return new PhotoSize($this->data["photo"][$elemarray]);
      }
    }

    public function getSticker()
    {
      return new Sticker($this->data["sticker"]);
    }

    public function getVideo()
    {
      return new Video($this->data["video"]);
    }

    public function getVoice()
    {
      return new Voice($this->data["voice"]);
    }

    public function getVideoNote()
    {
      return new VideoNote($this->data["video_note"]);
    }

    public function getCaption()
    {
      return $this->data["caption"];
    }

    public function getContact()
    {
      return new Contact($this->data["contact"]);
    }

    public function getLocation()
    {
      return new Location($this->data["location"]);
    }

    public function getVenue()
    {
      return new Venue($this->data["venue"]);
    }

    public function getPoll()
    {
      return new Poll($this->data["poll"]);
    }

    public function getNewChatMembers(int $elem = -1)
    {
      if ($elem >= 0)
      {
        return new User($this->data["new_chat_members"][$elem]);
      }
      else
      {
        return $this->data["new_chat_members"];
      }
    }

    public function getLeftChatMember()
    {
      return new User($this->data["left_chat_member"]);
    }

    public function getNewChatTitle()
    {
      return $this->data["new_chat_title"];
    }

    public function getNewChatPhoto(int $elem = -1)
    {
      if ($elem >= 0)
      {
        return new PhotoSize($this->data["new_chat_photo"]);
      }
      else
      {
        return $this->data["new_chat_photo"];
      }
    }

    public function isDeleteChatPhoto()
    {
      return $this->data["delete_chat_photo"];
    }

    public function isGroupChatCreated()
    {
      return $this->data["group_chat_created"];
    }

    public function isSupergroupChatCreated()
    {
      return $this->data["supergroup_chat_created"];
    }

    public function isChannelChatCreated()
    {
      return $this->data["channel_chat_created"];
    }

    public function getMigrateToChatID()
    {
      return $this->data["migrate_to_chat_id"];
    }

    public function getMigrateFromChatID()
    {
      return $this->data["migrate_from_chat_id"];
    }

    public function getPinnedMessage()
    {
      return new Message($this->data["pinned_message"]);
    }

    public function getInvoice(){} // Coming soon...

    public function getSuccessfulPayment(){} // Coming soon too...

    public function getConnectedWebsite()
    {
      return $this->data["connected_website"];
    }

    public function getPassportData(){} // Not realised

    public function getReplyMarkup()
    {
      return new InlineKeyboardMarkup\InlineKeyboardMarkup($this->data["reply_markup"]);
    }
  }
?>
