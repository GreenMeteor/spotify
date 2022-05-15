<?php

use humhub\libs\Html;
use humhub\widgets\PanelMenu;

?>

<div class="panel panel-default panel-spotify" id="panel-spotify">
    <?= PanelMenu::widget(['id' => 'panel-spotify']); ?>
  <div class="panel-heading">
    <?= Yii::t('SpotifyModule.base', '<strong>Spotify</strong>'); ?>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div') ?>
<iframe src="<?= $spotify; ?>" <?= Html::nonce() ?> width="100%" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media" sandbox="allow-same-origin allow-scripts allow-popups"></iframe>
<?= Html::endTag('div'); ?>
</div>
</div>
