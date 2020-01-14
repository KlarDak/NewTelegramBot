<?php
  namespace KlarDak\TelegramBot\Entities;

  class Voice extends MediaEntity
  {
    public $duration = 0;

    function __construct(array $data)
    {
      if (($data["file_id"] && $data["file_unique_id"]) != null && $data["duration"] >= 0)
      {
        parent::__construct($data);
        $this->duration = $data["duration"];

        return true;
      }
      else
      {
        return false;
      }
    }

    public function getDuration()
    {
      return $this->duration;
    }
  }
?>
