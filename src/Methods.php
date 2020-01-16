<?php
  namespace KlarDak\TelegramBot;

  class Methods
  {
    public static $token = "";

    public static $types = [
      "text",
      "photo",
      "video",
      "audio",
      "document",
      "animation",
      "game",
      "sticker",
      "video",
      "voice",
      "videonote",
      "contact",
      "location",
      "venue",
      "poll"
    ];

    public static $methods = [
      "sendMessage",
      "sendPhoto",
      "sendVideo",
      "sendAnimation",
      "sendAudio",
      "sendDocument",
      "sendVoice",
      "sendVideoNote",
      "sendMediaGroup",
      "sendLocation",
      "sendVenue",
      "sendContact",
      "sendPoll",
      "sendSticker",
      "sendChatAction",
      "forwardMessage",
      "answerCallbackQuery",
      "getFile",
      "editMessageText",
      "editMessageCaption",
      "editMessageMedia",
      "editMessageReplyMarkup",
      "stopPoll",
      "deleteMessage"
    ];

    public static $actions = [
      "typing",
      "upload_photo",
      "record_video",
      "upload_video",
      "record_audio",
      "upload_audio",
      "upload_document",
      "find_location",
      "record_video_note",
      "upload_video_note"
    ];

    const TYPING = "typing";
    const UPLOAD_PHOTO = "upload_photo";
    const RECORD_VIDEO =  "record_video";
    const UPLOAD_VIDEO =  "upload_video";
    const RECORD_AUDIO =  "record_audio";
    const UPLOAD_AUDIO = "upload_audio";
    const UPLOAD_DOCUMENT =  "upload_document";
    const FIND_LOCATION =  "find_location";
    const RECORD_VIDEO_NOTE = "record_video_note";
    const UPLOAD_VIDEO_NOTE = "upload_video_note";
  }
?>
