<?php
namespace Cv\Settings;

use Bitrix\Main\Entity\Event;
use Bitrix\Main\Loader;
use Bitrix\Main\LoaderException;

class Handler
{
    /**
     * @param Event $event
     * @return void
     * @throws LoaderException
     */
    public function OnPageStart(\Bitrix\Main\Entity\Event $event)
    {
     Loader::includeModule("cv.sale");
    }
}