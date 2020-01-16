<?php
  namespace KlarDak\TelegramBot\Entities;

  class ChatPhoto
  {
    public $small_file_id;
    public $small_file_unique_id;
    public $big_file_id;
    public $big_file_unique_id;

    function __construct(array $data)
    {
      $this->small_file_id = $data["small_file_id"];
      $this->small_file_unique_id = $data["small_file_unique_id"];
      $this->big_file_id = $data["big_file_id"];
      $this->big_file_unique_id = $data["big_file_unique_id"];

      return $data;
    }

    public function getSmallFileID()
    {
      return $this->small_file_id;
    }


    public function getSmallFileUniqueID()
    {
      return $this->small_file_unique_id;
    }

    public function getBigFileID()
    {
      return $this->big_file_id;
    }

    public function getBigFileUniqueID()
    {
      return $this->big_file_unique_id;
    }
  }
?>
