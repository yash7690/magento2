<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Search\Request;

use Magento\Framework\Serialize\SerializerInterface;

class Config extends \Magento\Framework\Config\Data
{
    /**
     * Cache identifier
     */
    const CACHE_ID = 'request_declaration';

    /**
     * @param \Magento\Framework\Search\Request\Config\FilesystemReader $reader
     * @param \Magento\Framework\Config\CacheInterface $cache
     * @param string|null $cacheId
     * @param SerializerInterface|null $serializer
     */
    public function __construct(
        \Magento\Framework\Search\Request\Config\FilesystemReader $reader,
        \Magento\Framework\Config\CacheInterface $cache,
        $cacheId = self::CACHE_ID,
        SerializerInterface $serializer = null
    ) {
        parent::__construct($reader, $cache, $cacheId, $serializer);
    }
}
