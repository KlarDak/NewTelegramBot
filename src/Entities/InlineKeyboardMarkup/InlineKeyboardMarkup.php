<?php
  namespace KlarDak\TelegramBot\Entities\InlineKeyboardMarkup;

  class InlineKeyboardMarkup
  {
    public $buttons;
    public $line;

    function __construct(array $data){
        $this->buttons = $data["inline_keyboard"];

        return $this->buttons;
    }

    public static function getKeyboard(array $keyboard)
    {
      return json_encode(["inline_keyboard" => $keyboard]);
    }

    public function getLine(int $line)
    {
      $this->line = $this->buttons[$line];

      return $this->buttons[$line];
    }

    public function getButton(int $button)
    {
      return new InlineKeyboardButton($this->line[$button]);
    }
  }
?>
