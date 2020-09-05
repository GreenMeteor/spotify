<?php

namespace humhub\modules\spotify\widgets;

use Yii;
use yii\base\Widget;

/**
 *
 * @author Felli
 */
class SpotifyFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $url = Yii::$app->getModule('spotify')->getServerUrl() . '/embed/album/';

        if (!$url) {
            return '';
        }

        return $this->render('spotifyframe', ['spotify' => $url]);
    }
}
