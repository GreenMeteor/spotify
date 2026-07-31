<?php

namespace humhub\modules\spotify;

use Yii;
use yii\helpers\Url;
use humhub\modules\ui\menu\MenuLink;
use humhub\modules\ui\icon\widgets\Icon;

class Events
{
    /**
     * @param $event yii\base\Event
     */
    public static function onAdminMenuInit($event)
    {
        $event->sender->addEntry(new MenuLink([
            'label' => Yii::t('SpotifyModule.base', 'Spotify Settings'),
            'url' => Url::toRoute('/spotify/admin/index'),
            'icon' => Icon::get('fa-spotify'),
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'spotify' && Yii::$app->controller->id == 'admin'),
            'sortOrder' => 650
        ]));
    }

    /**
     * @param $event yii\base\Event
     */
    public static function addSpotifyFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }

        $event->sender->addWidget(widgets\SpotifyFrame::class, [], [
            'sortOrder' => '600'
        ]);
    }
}
