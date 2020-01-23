<?php
  namespace KlarDak\TelegramBot;

  class TelegramBot
  {
    public static $token = "";

    public $update_id = 0;

    public $message_id = 0;
    public $chat_id = 0;
    public $user_id = 0;

    public $from;
    public $chat;
    public $text;
    public $caption;
    public $date = 0;
    public $photo;
    public $video;
    public $animation;
    public $document;
    public $voice;
    public $audio;
    public $contact;
    public $venue;
    public $location;
    public $videonote;
    public $poll;
    public $sticker;

    function __construct($token)
    {
      $this->token = $token;
      Methods::$token = $token;

      return true;
    }

    public function getUpdates()
    {
      $data = json_decode(file_get_contents("php://input"), true);

      $this->update_id = $data["update_id"];
      $this->message_id = $data["message"]["message_id"];
      $this->user_id = $data["message"]["from"]["id"];
      $this->chat_id = $data["message"]["chat"]["id"];
      $this->from = $data["message"]["from"];
      $this->chat = $data["message"]["chat"];
      $this->text = $data["message"]["text"];
      $this->caption = $data["message"]["caption"];
      $this->date = $data["message"]["date"];
      $this->photo = $data["message"]["photo"];
      $this->video = $data["message"]["video"];
      $this->animation = $data["message"]["animation"];
      $this->audio = $data["message"]["audio"];
      $this->document = $data["message"]["document"];
      $this->voice = $data["message"]["voice"];
      $this->videonote = $data["message"]["video_note"];
      $this->contact = $data["message"]["contact"];
      $this->location = $data["message"]["location"];
      $this->venue = $data["message"]["venue"];
      $this->poll = $data["message"]["poll"];
      $this->sticker = $data["message"]["sticker"];

      return $data;
    }

    public function doAction(string $type = "sendMessage", array $data)
    {
      if (in_array($type, Methods::$methods))
      {
        $doaction = curl_init("https://api.telegram.org/bot". $this->token ."/". $type);
        curl_setopt($doaction, CURLOPT_POST, 1);
        curl_setopt($doaction, CURLOPT_POSTFIELDS, $data);
        curl_setopt($doaction, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($doaction);
        curl_close($doaction);

        if (array_key_exists("result", $result)){
          return $result["result"];
        }
        else {
          return $result;
        }

        return $result;
      }
      else
      {
        return false;
      }
    }

    public function getUser()
    {
      return new Entities\User($this->from);
    }

    public function getChat()
    {
      return new Entities\Chat($this->chat);
    }

    public function getMessage()
    {
      $data = json_decode(file_get_contents("php://input"), true);
      return new Entities\Message($data["message"]);
    }

    public function getPhoto(int $elemarray = -1) // Temporarily function
    {
      if ($elemarray >= 0)
      {
        return new Entities\PhotoSize($this->photo[$elemarray]);
      }
      else
      {
        return $this->photo;
      }
    }

    public function getVideo()
    {
      return new Entities\Video($this->video);
    }

    public function getAnimation()
    {
      return new Entities\Animation($this->animation);
    }

    public function getDocument()
    {
      return new Entities\Document($this->document);
    }

    public function getAudio()
    {
      return new Entities\Audio($this->audio);
    }

    public function getVoice()
    {
      return new Entities\Voice($this->voice);
    }

    public function getContact()
    {
      return new Entities\Contact($this->contact);
    }

    public function getVenue()
    {
      return new Entities\Venue($this->Venue);
    }

    public function getLocation()
    {
      return new Entities\Location($this->location);
    }

    public function getVideoNote()
    {
      return new Entities\VideoNote($this->videonote);
    }

    public function getPoll()
    {
      return new Entities\Poll($this->poll);
    }

    public function getSticker()
    {
      return new Entities\Stickers\Sticker($this->sticker);
    }

    public function getText()
    {
      return $this->text;
    }

    public function getMessageID()
    {
      return $this->message_id;
    }

    public function getUpdateID()
    {
      return $this->update_id;
    }

    public function getUserID()
    {
      return $this->user_id;
    }

    public function getChatID()
    {
      return $this->chat_id;
    }

    public function getDate()
    {
      return $this->date;
    }

    public function typeMessage()
    {
      foreach (Methods::$types as $type)
      {
        if (!is_null($this->$type))
        {
          return $type;
        }
      }
    }

    public function doChatAction($chat_id, string $action)
    {
      self::doAction("sendChatAction", ["chat_id" => $chat_id, "action" => $action]);
    }

    public function forwardMessage($chat_id, $from_chat_id, bool $disable_notification, int $message_id)
    {
      return self::doAction("forwardMessage", ["chat_id" => $chat_id, "from_chat_id" => $from_chat_id, "disable_notification" => $disable_notification, "message_id" => $message_id]);
    }

    public function getFile(string $file_id)
    {
      return new Entities\File(self::doAction("getFile", ["file_id" => $file_id]));
    }
  }

?>
