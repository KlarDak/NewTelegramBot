<?php
  require __DIR__ . "/vendor/autoload.php";

  $bot = new KlarDak\TelegramBot\Entities\Chat(["id" => 1, "type" => "group", "photo" => []]);
  var_dump($bot->getPhoto());
?>
