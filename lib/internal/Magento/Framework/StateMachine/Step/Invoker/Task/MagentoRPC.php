<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/14/19
 * Time: 12:17 PM
 */

namespace Magento\Framework\StateMachine\Step\Invoker\Task;

use Magento\Framework\StateMachine\Step\InvokerInterface;

class MagentoRPC implements InvokerInterface
{
    /**
     * @var Http\ClientInterface
     */
    private $client;

    /**
     * @var Http\ResponseResolver
     */
    private $resolver;

    public function __construct(
        Http\ClientInterface $client,
        Http\ResponseResolver $resolver
    ) {
        $this->client = $client;
        $this->resolver = $resolver;
    }

    /**
     * @param array $step
     * @param array|null $parameters
     * @return array|null
     */
    public function invoke(array $step, ?array $parameters): ?array
    {

        $response = $this->client->request(
            $step['task']['method'],
            $step['task']['url'],
            $parameters
        );
        return $this->resolver->getResult($response);
    }
}