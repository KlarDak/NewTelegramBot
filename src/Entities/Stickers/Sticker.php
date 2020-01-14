<?php
  namespace KlarDak\TelegramBot\Entities\Stickers;

  class Sticker extends \KlarDak\TelegramBot\Entities\MediaEntity
  {
    public $width = 0;
    public $height = 0;
    public $is_animated = false;
    public $thumb = [];
    public $emoji;
    public $set_name;
    public $mask_position = [];

    function __construct(array $data)
    {
      parent::__construct($data);
      $this->width = $data["width"];
      $this->height = $data["height"];
      $this->is_animated = $data["is_animated"];
      $this->thumb = $data["thumb"];
      $this->emoji = $data["emoji"];
      $this->set_name = $data["set_name"];
      $this->mask_position = $data["mask_position"];

      return true;
    }

    public function getWidth()
    {
      return $this->width;
    }

    public function getHeight()
    {
      return $this->height;
    }

    public function isAnimated()
    {
      return $this->is_animated;
    }

    public function getThumb()
    {
      return new \KlarDak\TelegramBot\Entities\PhotoSize($this->thumb);
    }

    public function getEmoji()
    {
      return $this->emoji;
    }

    public function setName()
    {
      return $this->set_name;
    }

    public function getMaskPosition()
    {
      return $this->mask_position;
    }
  }
?>
