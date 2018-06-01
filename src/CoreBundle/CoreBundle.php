<?php

namespace CoreBundle;

use CoreBundle\DependencyInjection\CoreBundleExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class CoreBundle
 */
class CoreBundle extends Bundle
{
    /**
     * @return null|string
     */
    public function getParent()
    {
        return 'FOSUserBundle';
    }

    /**
     * @return CoreBundleExtension
     */
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new CoreBundleExtension();
        }

        return $this->extension;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return 'tests';
    }
}
