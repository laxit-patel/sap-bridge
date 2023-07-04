<?php

namespace Laxit\SapBridge;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laxit\SapBridge\Skeleton\SkeletonClass
 */
class SapBridgeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sap-bridge';
    }
}
