<?php

namespace humhub\modules\spotify;

use humhub\modules\spotify\Module;
use humhub\modules\spotify\Events;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\modules\space\widgets\Sidebar as Space;
use humhub\modules\dashboard\widgets\Sidebar as Dashboard;
return [
    'id' => 'spotify',
    'class' => Module::class,
    'namespace' => 'humhub\modules\spotify',
    'events' => [
        ['class' => Dashboard::class, 'event' => Dashboard::EVENT_INIT, 'callback' => [Events::class, 'addSpotifyFrame']],
        ['class' => Space::class, 'event' => Space::EVENT_INIT, 'callback' => [Events::class, 'addSpotifyFrame']],
        ['class' => AdminMenu::class, 'event' => AdminMenu::EVENT_INIT, 'callback' => [Events::class, 'onAdminMenuInit']]
    ]
];
?>
