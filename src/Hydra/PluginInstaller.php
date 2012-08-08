<?php

namespace Hydra;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class PluginInstaller extends LibraryInstaller 
{

    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        list($vendor, $name) = explode('/', $package->getPrettyName());
        return 'app/plugins/' . ($vendor == 'hydra' ? $name : $package->getPrettyName());
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'hydra-plugin' === $packageType;
    }
    
}
