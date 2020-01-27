<?php
  namespace KlarDak\TelegramBot\Entities;

  class WebhookInfo
  {
    public $url;
    public $has_custom_certificate = false;
    public $pending_update_count = 0;
    public $last_error_date = 0;
    public $last_error_message;
    public $max_connections = 0;
    public $allowed_updates;

    function __construct(array $data)
    {
      $this->url = $data["url"];
      $this->has_custom_certificate = $data["has_custom_certificate"];
      $this->pending_update_count = $data["pending_update_count"];
      $this->last_error_date = $data["last_error_date"];
      $this->last_error_message = $data["last_error_message"];
      $this->max_connections = $data["max_connections"];
      $this->allowed_updates = $data["allowed_updates"];

      return true;
    }

    public function getUrl()
    {
      return $this->url;
    }

    public function hasCustomCertificate()
    {
      return $this->has_custom_certificate;
    }

    public function getPendingUpdateCount()
    {
      return $this->pending_update_count;
    }

    public function getLastErrorDate()
    {
      return $this->last_error_date;
    }

    public function getLastErrorMessage()
    {
      return $this->last_error_message;
    }

    public function getMaxConnections()
    {
      return $this->max_connections;
    }

    public function getAllowedUpdates(int $elem = -1)
    {
      if ($elem >= 0)
      {
        return $this->allowed_updates[$elem];
      }
      else {
        return $this->allowed_updates;
      }
    }
  }
?>
