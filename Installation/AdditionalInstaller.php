<?php

namespace Claroline\MessageBundle\Installation;

use Claroline\InstallationBundle\Additional\AdditionalInstaller as BaseInstaller;

class AdditionalInstaller extends BaseInstaller
{
    public function preUpdate($currentVersion, $targetVersion)
    {
        $updater = new Updater\MigrationUpdater($this->container);
        $updater->setLogger($this->logger);
        $updater->preUpdate();
    }

    public function postUpdate($currentVersion, $targetVersion)
    {
    }
}