<?php
  namespace KlarDak\TelegramBot;

  class TelegramBot extends LibFunctions
  {
    public static $token = "";

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
        curl_setopt($doaction, CURLOPT_POST, 1);
        curl_setopt($doaction, CURLOPT_POSTFIELDS, $data);
        curl_setopt($doaction, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($doaction, CURLOPT_BINARYTRANSFER, 1);
        $result = json_decode(curl_exec($doaction), true);
        curl_close($doaction);

        if (array_key_exists("result", $result)){
          if ($resultobj === true)
          {
            if (gettype($result["result"]) == ("bool" || "int") || $type == "getChatAdministators")
            {
              return $result["result"];
            }
            else{
              if ($resultobj === true)
              {
                if (is_bool($result["result"]) || is_numeric($result["result"]) || $type == "getChatAdministators")
                {
                  return $result["result"];
                }
                else
                {
                  switch ($type) {
                    case 'getMe':
                      return Entities\User($result["result"]);
                    break;
                    default:
                      return Entities\Message($result["result"]);
                    break;
                  }
                }
              }
              // --------
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
  }

?>
