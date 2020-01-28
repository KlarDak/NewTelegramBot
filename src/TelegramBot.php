<?php
  namespace KlarDak\TelegramBot;

  class TelegramBot extends LibFunctions
  {
    public static $token = "";

    public $sendquery = [
      CURLOPT_POST => 1,
      // "CURLOPT_POSTFIELDS" => "",
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_BINARYTRANSFER => 1,
      CURLOPT_FOLLOWLOCATION => 1,
      // "CURLOPT_PROXY" => "",
      // "CURLOPT_PROXYUSERPWD" => ""
    ];

    function __construct(string $token, bool $getupdates = false)
    {
      $this->token = $token;
      Methods::$token = $token;

      if ($getupdates === true)
      {
        self::getUpdate();
      }

      return true;
    }

    public function getUpdates(int $offset = 0, int $limit = 10, int $timeout = 0, array $allowed_updates = ["message", "callback_query", "inline_query"])
    {
      return self::doAction("getUpdates", ["offset" => $offset, "limit" => $limit, "timeout" => $timeout, "allowed_updates", $allowed_updates]);
    }

    public function doAction(string $type = "getMe", array $data, bool $resultobj = false)
    {
      if (in_array($type, Methods::$methods))
      {
        $doaction = curl_init("https://api.telegram.org/bot". $this->token ."/". $type);
        $this->sendquery[CURLOPT_POSTFIELDS] = $data;
        curl_setopt_array($doaction, $this->sendquery);
        $result = json_decode(curl_exec($doaction), true);
        curl_close($doaction);

        if (array_key_exists("result", $result))
        {
          if ($resultobj === true)
          {
            if (is_bool($result["result"]) || is_int($result["result"]) || $type == "getChatAdministators")
            {
              return $result["result"];
            }
            else
            {
              switch ($type) {
                case 'getUpdates':
                  return $this->result["result"];
                break;
                case 'getMe':
                  return new Entities\User($result["result"]);
                break;
                case 'getUserProfilePhotos':
                  return new Entities\UserProfilePhotos($result["result"]);
                break;
                case 'getFile':
                  return new Entities\File($result["result"]);
                break;
                case 'getUserProfilePhotos':
                  return new Entities\UserProfilePhotos($result["result"]);
                break;
                case 'getChat':
                  return new Entities\Chat($result["result"]);
                break;
                case 'getChatMember':
                  return new Entities\ChatMember($result["result"]);
                break;
                case 'stopPoll':
                  return new Entities\Poll($result["result"]);
                break;
                case 'getStickerSet':
                  return new Entities\Stickers\StickerSet($result["result"]);
                break;
                case 'uploadStickerFile':
                  return new Entities\File($result["result"]);
                break;
                default:
                  return new Entities\Message($result["result"]);
                break;
              }
            }
          }
          else
          {
            return $result["result"];
          }
        }
        else {
          return $result;
        }
      }
      else
      {
        return false;
      }
    }

    public function doChatAction($chat_id, string $action)
    {
      self::doAction("sendChatAction", ["chat_id" => $chat_id, "action" => $action]);
    }

    public function setProxy(string $ip, int $port)
    {
      $this->sendquery["CURLOPT_PROXY"] = "$ip:$port";
      return true;
    }

    public function setProxyAuth(string $user, string $password)
    {
      $this->sendquery["CURLOPT_PROXYUSERPWD"] = "$user:$password";
      return true;
    }
  }

?>
