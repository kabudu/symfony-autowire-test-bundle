<?php

namespace Symfony\Bundle\CustomBundle\Component;

/**
 * Class UsesCustomService
 * @package Symfony\Bundle\CustomBundle\Component
 */
class UsesCustomService
{
    /**
     * @var CustomService
     */
    private $customService;

    /**
     * UsesCustomService constructor.
     * @param CustomService $customService
     */
    public function __construct(CustomService $customService)
    {
        $this->customService = $customService;
    }
}