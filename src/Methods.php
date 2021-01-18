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
      // WehHooks
      "getUpdates",
      "setWebhook",
      "deleteWebhook",
      "getWebhookInfo",
      // Available methods
      "getMe",
      "sendMessage",
      "forwardMessage",
      "copyMessage",
      "sendPhoto",
      "sendVideo",
      "sendAnimation",
      "sendAudio",
      "sendDocument",
      "sendVoice",
      "sendVideoNote",
      "sendMediaGroup",
      "sendLocation",
      "sendDice",
      "editMessageLiveLocation",
      "stopMessageLiveLocation",
      "sendVenue",
      "sendContact",
      "sendPoll",
      "sendChatAction",
      "getUserProfilePhotos",
      "getFile",
      "kickChatMember",
      "unbanChatMember",
      "restrictChatMember",
      "promoteChatMember",
      "setChatAdministatorCustomTitle",
      "setChatPermission",
      "exportChatInviteLink",
      "setChatPhoto",
      "deleteChatPhoto",
      "setChatTitle",
      "setChatDescription",
      "pibChatMessage",
      "unpinChatMessage",
      "leaveChat",
      "getChat",
      "getChatAdministrators",
      "getChatMembersCount",
      "getChatMember",
      "setChatStickerSet",
      "deleteChatStickerSet",
      "answerCallbackQuery",
      "setMyCommands",
      "getMyCommands",
      // Updating messages
      "editMessageText",
      "editMessageCaption",
      "editMessageMedia",
      "editMessageReplyMarkup",
      "stopPoll",
      "deleteMessage",
      // Stickers
      "sendSticker",
      "getStickerSet",
      "uploadStickerFile",
      "createNewStickerSet",
      "addStickerToSet",
      "setStickerPositionInSet",
      "deleteStickerFromSet",
      // Payments
      "sendInvoice",
      "answerShippingQuery",
      "answerPreCheckoutQuery"
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
