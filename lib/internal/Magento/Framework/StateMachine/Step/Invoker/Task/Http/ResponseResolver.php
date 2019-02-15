<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\StateMachine\Step\Invoker\Task\Http;

/**
 * Extract result from http response. Call response handler by status.
 */
class ResponseResolver
{
    /**
     * @var ConverterInterface
     */
    private $converter;

    /**
     * @param ConverterInterface $converter
     */
    public function __construct(ConverterInterface $converter)
    {
        $this->converter = $converter;
    }

    /**
     * @param \Zend_Http_Response $response
     * @return array|null
     */
    public function getResult(\Zend_Http_Response $response) : ?array
    {
        $result = null;
        $converterMediaType = $this->converter->getContentMediaType();

        /** Content-Type header may not only contain media-type declaration */
        if ($response->getBody() && is_int(strripos($response->getHeader('Content-Type'), $converterMediaType))) {
            $responseBody = $this->converter->fromBody($response->getBody());
        } else {
            $responseBody = [];
        }
        return $responseBody;
    }
}
