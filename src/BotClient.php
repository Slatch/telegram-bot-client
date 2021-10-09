<?php

namespace Slatch\TelegramBotClient;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Utils;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Slatch\TelegramBotClient\Api\ApiConfigInterface;
use Slatch\TelegramBotClient\Bot\Credentials;
use Slatch\TelegramBotClient\Entities\BotCommand;
use Slatch\TelegramBotClient\Entities\Chat;
use Slatch\TelegramBotClient\Entities\ChatInviteLink;
use Slatch\TelegramBotClient\Entities\ChatMember;
use Slatch\TelegramBotClient\Entities\ChatMemberAdministrator;
use Slatch\TelegramBotClient\Entities\File;
use Slatch\TelegramBotClient\Entities\Message;
use Slatch\TelegramBotClient\Entities\MessageId;
use Slatch\TelegramBotClient\Entities\Poll;
use Slatch\TelegramBotClient\Entities\StickerSet;
use Slatch\TelegramBotClient\Entities\UserProfilePhotos;
use Slatch\TelegramBotClient\Exceptions\NotImplementedException;
use Slatch\TelegramBotClient\Http\Method;
use Slatch\TelegramBotClient\Entities\User;

/**
 * @todo Add Passport https://core.telegram.org/bots/api#setpassportdataerrors
 */
class BotClient
{
    private ClientInterface $httpClient;
    private Credentials $credentials;
    private ApiConfigInterface $apiConfig;

    public function __construct(
        ClientInterface $httpClient,
        Credentials $credentials,
        ApiConfigInterface $apiConfig
    ) {
        $this->httpClient = $httpClient;
        $this->credentials = $credentials;
        $this->apiConfig = $apiConfig;
    }

    public function getMe(): User
    {
        $method = new \Slatch\TelegramBotClient\Methods\GetMe();

        $request = $this->buildRequest($method->getMethod());
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function logOut(): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\LogOut();

        $request = $this->buildRequest($method->getMethod());
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function close(): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\Close();

        $request = $this->buildRequest($method->getMethod());
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function sendMessage(\Slatch\TelegramBotClient\Arguments\SendMessage $argument): Message
    {
        $method = new \Slatch\TelegramBotClient\Methods\SendMessage();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function forwardMessage(\Slatch\TelegramBotClient\Arguments\ForwardMessage $argument): Message
    {
        $method = new \Slatch\TelegramBotClient\Methods\ForwardMessage();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function copyMessage(\Slatch\TelegramBotClient\Arguments\CopyMessage $argument): MessageId
    {
        $method = new \Slatch\TelegramBotClient\Methods\CopyMessage();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function sendPhoto(\Slatch\TelegramBotClient\Arguments\SendPhoto $argument): Message
    {
        $method = new \Slatch\TelegramBotClient\Methods\SendPhoto();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function sendAudio(\Slatch\TelegramBotClient\Arguments\SendAudio $argument): Message
    {
        $method = new \Slatch\TelegramBotClient\Methods\SendAudio();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function sendDocument(\Slatch\TelegramBotClient\Arguments\SendDocument $argument): Message
    {
        $method = new \Slatch\TelegramBotClient\Methods\SendDocument();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function sendVideo(\Slatch\TelegramBotClient\Arguments\SendVideo $argument): Message
    {
        $method = new \Slatch\TelegramBotClient\Methods\SendVideo();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function sendAnimation(\Slatch\TelegramBotClient\Arguments\SendAnimation $argument): Message
    {
        $method = new \Slatch\TelegramBotClient\Methods\SendAnimation();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function sendVoice(\Slatch\TelegramBotClient\Arguments\SendVoice $argument): Message
    {
        $method = new \Slatch\TelegramBotClient\Methods\SendVoice();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function sendVideoNote(\Slatch\TelegramBotClient\Arguments\SendVideoNote $argument): Message
    {
        $method = new \Slatch\TelegramBotClient\Methods\SendVideoNote();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    /**
     * @param Arguments\SendMediaGroup $argument
     * @return Message[]
     */
    public function sendMediaGroup(\Slatch\TelegramBotClient\Arguments\SendMediaGroup $argument): array
    {
        $method = new \Slatch\TelegramBotClient\Methods\SendMediaGroup();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function sendLocation(\Slatch\TelegramBotClient\Arguments\SendLocation $argument): Message
    {
        $method = new \Slatch\TelegramBotClient\Methods\SendLocation();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function editMessageLiveLocation(\Slatch\TelegramBotClient\Arguments\EditMessageLiveLocation $argument): Message
    {
        $method = new \Slatch\TelegramBotClient\Methods\EditMessageLiveLocation();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function stopMessageLiveLocation(\Slatch\TelegramBotClient\Arguments\StopMessageLiveLocation $argument): Message
    {
        $method = new \Slatch\TelegramBotClient\Methods\StopMessageLiveLocation();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function sendVenue(\Slatch\TelegramBotClient\Arguments\SendVenue $argument): Message
    {
        $method = new \Slatch\TelegramBotClient\Methods\SendVenue();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function sendContact(\Slatch\TelegramBotClient\Arguments\SendContact $argument): Message
    {
        $method = new \Slatch\TelegramBotClient\Methods\SendContact();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function sendPoll(\Slatch\TelegramBotClient\Arguments\SendPoll $argument): Message
    {
        $method = new \Slatch\TelegramBotClient\Methods\SendPoll();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function sendDice(\Slatch\TelegramBotClient\Arguments\SendDice $argument): Message
    {
        $method = new \Slatch\TelegramBotClient\Methods\SendDice();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function sendChatAction(\Slatch\TelegramBotClient\Arguments\SendChatAction $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\SendChatAction();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function getUserProfilePhotos(\Slatch\TelegramBotClient\Arguments\GetUserProfilePhotos $argument): UserProfilePhotos
    {
        $method = new \Slatch\TelegramBotClient\Methods\GetUserProfilePhotos();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function getFile(\Slatch\TelegramBotClient\Arguments\GetFile $argument): File
    {
        $method = new \Slatch\TelegramBotClient\Methods\GetFile();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function banChatMember(\Slatch\TelegramBotClient\Arguments\BanChatMember $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\BanChatMember();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function unbanChatMember(\Slatch\TelegramBotClient\Arguments\UnbanChatMember $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\UnbanChatMember();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function restrictChatMember(\Slatch\TelegramBotClient\Arguments\RestrictChatMember $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\RestrictChatMember();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function promoteChatMember(\Slatch\TelegramBotClient\Arguments\PromoteChatMember $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\PromoteChatMember();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function setChatAdministratorCustomTitle(\Slatch\TelegramBotClient\Arguments\SetChatAdministratorCustomTitle $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\SetChatAdministratorCustomTitle();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function setChatPermissions(\Slatch\TelegramBotClient\Arguments\SetChatPermissions $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\SetChatPermissions();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function exportChatInviteLink(\Slatch\TelegramBotClient\Arguments\ExportChatInviteLink $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\ExportChatInviteLink();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function createChatInviteLink(\Slatch\TelegramBotClient\Arguments\CreateChatInviteLink $argument): ChatInviteLink
    {
        $method = new \Slatch\TelegramBotClient\Methods\CreateChatInviteLink();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function editChatInviteLink(\Slatch\TelegramBotClient\Arguments\EditChatInviteLink $argument): ChatInviteLink
    {
        $method = new \Slatch\TelegramBotClient\Methods\EditChatInviteLink();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function revokeChatInviteLink(\Slatch\TelegramBotClient\Arguments\RevokeChatInviteLink $argument): ChatInviteLink
    {
        $method = new \Slatch\TelegramBotClient\Methods\RevokeChatInviteLink();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function setChatPhoto(\Slatch\TelegramBotClient\Arguments\SetChatPhoto $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\SetChatPhoto();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function deleteChatPhoto(\Slatch\TelegramBotClient\Arguments\DeleteChatPhoto $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\DeleteChatPhoto();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function setChatTitle(\Slatch\TelegramBotClient\Arguments\SetChatTitle $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\SetChatTitle();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function setChatDescription(\Slatch\TelegramBotClient\Arguments\SetChatDescription $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\SetChatDescription();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function pinChatMessage(\Slatch\TelegramBotClient\Arguments\PinChatMessage $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\PinChatMessage();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function unpinChatMessage(\Slatch\TelegramBotClient\Arguments\UnpinChatMessage $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\UnpinChatMessage();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function unpinAllChatMessages(\Slatch\TelegramBotClient\Arguments\UnpinAllChatMessages $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\UnpinAllChatMessages();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function leaveChat(\Slatch\TelegramBotClient\Arguments\LeaveChat $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\LeaveChat();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function getChat(\Slatch\TelegramBotClient\Arguments\GetChat $argument): Chat
    {
        $method = new \Slatch\TelegramBotClient\Methods\GetChat();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    /**
     * @return ChatMemberAdministrator[]
     */
    public function getChatAdministrators(\Slatch\TelegramBotClient\Arguments\GetChatAdministrators $argument): array
    {
        $method = new \Slatch\TelegramBotClient\Methods\GetChatAdministrators();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function getChatMemberCount(\Slatch\TelegramBotClient\Arguments\GetChatMemberCount $argument): int
    {
        $method = new \Slatch\TelegramBotClient\Methods\GetChatMemberCount();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function getChatMember(\Slatch\TelegramBotClient\Arguments\GetChatMember $argument): ChatMember
    {
        throw new NotImplementedException('Make valid chat member');
        $method = new \Slatch\TelegramBotClient\Methods\GetChatMember();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function setChatStickerSet(\Slatch\TelegramBotClient\Arguments\SetChatStickerSet $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\SetChatStickerSet();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function deleteChatStickerSet(\Slatch\TelegramBotClient\Arguments\DeleteChatStickerSet $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\DeleteChatStickerSet();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function answerCallbackQuery(\Slatch\TelegramBotClient\Arguments\AnswerCallbackQuery $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\AnswerCallbackQuery();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function setMyCommands(\Slatch\TelegramBotClient\Arguments\SetMyCommands $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\SetMyCommands();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function deleteMyCommands(\Slatch\TelegramBotClient\Arguments\DeleteMyCommands $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\DeleteMyCommands();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    /**
     * @param Arguments\GetMyCommands $argument
     * @return BotCommand[]
     */
    public function getMyCommands(\Slatch\TelegramBotClient\Arguments\GetMyCommands $argument): array
    {
        $method = new \Slatch\TelegramBotClient\Methods\GetMyCommands();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    /**
     * @param Arguments\EditMessageText $argument
     * @return Message|bool
     */
    public function editMessageText(\Slatch\TelegramBotClient\Arguments\EditMessageText $argument)
    {
        $method = new \Slatch\TelegramBotClient\Methods\EditMessageText();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    /**
     * @param Arguments\EditMessageCaption $argument
     * @return Message|bool
     */
    public function editMessageCaption(\Slatch\TelegramBotClient\Arguments\EditMessageCaption $argument)
    {
        $method = new \Slatch\TelegramBotClient\Methods\EditMessageCaption();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    /**
     * @param Arguments\EditMessageMedia $argument
     * @return Message|bool
     */
    public function editMessageMedia(\Slatch\TelegramBotClient\Arguments\EditMessageMedia $argument)
    {
        $method = new \Slatch\TelegramBotClient\Methods\EditMessageMedia();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    /**
     * @param Arguments\EditMessageReplyMarkup $argument
     * @return Message|bool
     */
    public function editMessageReplyMarkup(\Slatch\TelegramBotClient\Arguments\EditMessageReplyMarkup $argument)
    {
        $method = new \Slatch\TelegramBotClient\Methods\EditMessageReplyMarkup();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function stopPoll(\Slatch\TelegramBotClient\Arguments\StopPoll $argument): Poll
    {
        $method = new \Slatch\TelegramBotClient\Methods\StopPoll();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function deleteMessage(\Slatch\TelegramBotClient\Arguments\DeleteMessage $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\DeleteMessage();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function sendSticker(\Slatch\TelegramBotClient\Arguments\SendSticker $argument): Message
    {
        $method = new \Slatch\TelegramBotClient\Methods\SendSticker();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function getStickerSet(\Slatch\TelegramBotClient\Arguments\GetStickerSet $argument): StickerSet
    {
        $method = new \Slatch\TelegramBotClient\Methods\GetStickerSet();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function uploadStickerFile(\Slatch\TelegramBotClient\Arguments\UploadStickerFile $argument): File
    {
        $method = new \Slatch\TelegramBotClient\Methods\UploadStickerFile();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function createNewStickerSet(\Slatch\TelegramBotClient\Arguments\CreateNewStickerSet $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\CreateNewStickerSet();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function addStickerToSet(\Slatch\TelegramBotClient\Arguments\AddStickerToSet $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\AddStickerToSet();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function setStickerPositionInSet(\Slatch\TelegramBotClient\Arguments\SetStickerPositionInSet $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\SetStickerPositionInSet();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function deleteStickerFromSet(\Slatch\TelegramBotClient\Arguments\DeleteStickerFromSet $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\DeleteStickerFromSet();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function setStickerSetThumb(\Slatch\TelegramBotClient\Arguments\SetStickerSetThumb $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\SetStickerSetThumb();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function answerInlineQuery(\Slatch\TelegramBotClient\Arguments\AnswerInline $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\AnswerInlineQuery();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function sendInvoice(\Slatch\TelegramBotClient\Arguments\SendInvoice $argument): Message
    {
        $method = new \Slatch\TelegramBotClient\Methods\SendInvoice();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function answerShippingQuery(\Slatch\TelegramBotClient\Arguments\AnswerShippingQuery $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\AnswerShippingQuery();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    public function answerPreCheckoutQuery(\Slatch\TelegramBotClient\Arguments\AnswerPreCheckoutQuery $argument): bool
    {
        $method = new \Slatch\TelegramBotClient\Methods\AnswerPreCheckoutQuery();
        $request = $this->buildRequest($method->getMethod(), $argument);
        $response = $this->sendRequest($request);

        return $method->parseResponse($response->getBody());
    }

    private function buildStream(\JsonSerializable $arguments = null): StreamInterface
    {
        return Utils::streamFor(json_encode($arguments));
    }

    private function buildRequest(string $method, \JsonSerializable $arguments = null): RequestInterface
    {
        return new Request(
            Method::POST,
            $this->generateUrl($method),
            [
                'Content-Type' => 'application/json',
                'Accept-Language' => 'ru,en-us',
            ],
            $this->buildStream($arguments)
        );
    }

    private function sendRequest(RequestInterface $request): ResponseInterface
    {
        return $this->httpClient->sendRequest($request);
    }

    private function generateUrl(string $method): string
    {
        return $this->apiConfig->getHost() . '/bot' . $this->credentials->getToken() . '/' . $method;
    }
}
