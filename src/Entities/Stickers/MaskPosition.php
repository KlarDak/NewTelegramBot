<?php
  namespace KlarDak\TelegramBot\Entities\Stickers;

  class MaskPosition
  {
    public $point;
    public $x_shift;
    public $y_shift;
    public $scale;

    function __construct(array $data)
    {
      $this->point = $data["point"];
      $this->x_shift = $data["x_shift"];
      $this->y_shift = $data["y_shift"];
      $this->scale = $data["scale"];
    }

    public function getPoint()
    {
      return $this->point;
    }

    public function getXShift()
    {
      return $this->x_shift;
    }

    public function getYShift()
    {
      return $this->y_shift;
    }

    public function getScale()
    {
      return $this->scale;
    }
  }
?>
