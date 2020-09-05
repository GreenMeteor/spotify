<?php

namespace humhub\modules\spotify;

use Yii;
use yii\helpers\Url;
use yii\base\BaseObject;
use humhub\models\Setting;

class Events extends BaseObject
{
    /**
     * @param $event yii\base\Event
     */
    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem([
            'label' => Yii::t('SpotifyModule.base', 'Spotify Settings'),
            'url' => Url::toRoute('/spotify/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-spotify"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'spotify' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
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
            'sortOrder' => Setting::Get('timeout', 'spotify')
        ]);
    }
}
