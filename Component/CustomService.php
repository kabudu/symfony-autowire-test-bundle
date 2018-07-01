<?php

namespace Symfony\Bundle\CustomBundle\Component;

/**
 * Class CustomService
 * @package Symfony\Bundle\CustomBundle\Component
 */
class CustomService
{
    /**
     * @var string
     */
    private $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }
}