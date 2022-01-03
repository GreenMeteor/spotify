<?php

namespace humhub\modules\spotify\models;

use Yii;
use yii\base\Model;

/**
 * ConfigureForm defines the configurable fields.
 */
class ConfigureForm extends Model
{

    public $serverUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => Yii::t('SpotifyModule.base', 'Spotify Widget URL:'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => Yii::t('SpotifyModule.base', 'e.g. <code>https://open.spotify.com/embed/album/{id}</code>'),
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('spotify')->settings->get('serverUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('spotify')->settings->set('serverUrl', $this->serverUrl);

        return true;
    }

}
