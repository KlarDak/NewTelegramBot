<?php
  namespace KlarDak\TelegramBot\Entities;

  class User
  {
    public $id = 0;
    public $is_bot = false;
    public $first_name;
    public $last_name;
    public $username;
    public $language_code;
    public $can_join_groups = false;
    public $can_read_all_group_messages = false;
    public $supports_inline_queries = false;

    function __construct(array $data)
    {
        $this->id = $data["id"];
        $this->is_bot = $data["is_bot"];
        $this->first_name = $data["first_name"];
        $this->last_name = $data["last_name"];
        $this->username = $data["username"];
        $this->language_code = $data["language_code"];
        $this->can_join_groups = $data["can_join_groups"];
        $this->can_read_all_group_messages = $data["can_read_all_group_messages"];
        $this->supports_inline_queries = $data["supports_inline_queries"];

        return $data;
    }

    public function getID()
    {
      return $this->id;
    }

    public function isBot()
    {
      return $this->is_bot;
    }

    public function getFirstName()
    {
      return $this->first_name;
    }

    public function getLastName()
    {
      return $this->last_name;
    }

    public function getUsername()
    {
      return $this->username;
    }

    public function getLanguageCode()
    {
      return $this->language_code;
    }

    public function canJoinGroups()
    {
      return $this->can_join_groups;
    }

    public function canReadAllGroupMessages()
    {
      return $this->can_read_all_group_messages;
    }

    public function canSupportsInlineQueries()
    {
      return $this->supports_inline_queries;
    }
  }

?>
