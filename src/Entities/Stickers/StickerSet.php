<?php
  namespace KlarDak\TelegramBot\Entities\Stickers;

  class StickerSet
  {
    public $name = "";
    public $title = "";
    public $is_animated = false;
    public $contains_masks = false;
    public $stickers;

    function __construct(array $data)
    {
      $this->name = $data["name"];
      $this->title = $data["title"];
      $this->is_animated = $data["is_animated"];
      $this->contains_masks = $data["contains_masks"];
      $this->stickers = $data["stickers"];

      return true;
    }

    public function getName()
    {
      return $this->name;
    }

    public function getTitle()
    {
      return $this->title;
    }
    public function isAnimated()
    {
      return $this->is_animated;
    }

    public function isContainsMasks()
    {
      return $this->contains_masks;
    }

    public function getStickers(int $elem = -1)
    {
      if ($elem >= 0)
      {
        return new Sticker($this->stickers[$elem]);
      }
      else {
        return $this->stickers;
      }
    }
  }
?>
