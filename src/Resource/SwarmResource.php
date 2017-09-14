<?php

namespace DockerPhpClient\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Joli\Jane\OpenApi\Runtime\Client\Resource;
class SwarmResource extends Resource
{
    /**
     * 
     *
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\DockerPhpClient\Model\SwarmResponse200|\DockerPhpClient\Model\ErrorResponse
     */
    public function swarmInspect($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.31/swarm';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\SwarmResponse200', 'json');
            }
            if ('404' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
            if ('500' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
            if ('503' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
        }
        return $response;
    }
    /**
     * 
     *
     * @param \DockerPhpClient\Model\SwarmInitBody $body 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|null|\DockerPhpClient\Model\ErrorResponse
     */
    public function swarmInit(\DockerPhpClient\Model\SwarmInitBody $body, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.31/swarm/init';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost', 'Accept' => array('application/json'), 'Content-Type' => 'application/json'), $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($body, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return null;
            }
            if ('400' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
            if ('500' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
            if ('503' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
        }
        return $response;
    }
    /**
     * 
     *
     * @param \DockerPhpClient\Model\SwarmJoinBody $body 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|null|\DockerPhpClient\Model\ErrorResponse
     */
    public function swarmJoin(\DockerPhpClient\Model\SwarmJoinBody $body, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.31/swarm/join';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($body, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return null;
            }
            if ('400' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
            if ('500' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
            if ('503' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
        }
        return $response;
    }
    /**
     * 
     *
     * @param array  $parameters {
     *     @var bool $force Force leave swarm, even if this is the last manager or that it will break the cluster.
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|null|\DockerPhpClient\Model\ErrorResponse
     */
    public function swarmLeave($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('force', false);
        $url = '/v1.31/swarm/leave';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return null;
            }
            if ('500' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
            if ('503' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
        }
        return $response;
    }
    /**
     * 
     *
     * @param \DockerPhpClient\Model\SwarmSpec $body 
     * @param array  $parameters {
     *     @var int $version The version number of the swarm object being updated. This is required to avoid conflicting writes.
     *     @var bool $rotateWorkerToken Rotate the worker join token.
     *     @var bool $rotateManagerToken Rotate the manager join token.
     *     @var bool $rotateManagerUnlockKey Rotate the manager unlock key.
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|null|\DockerPhpClient\Model\ErrorResponse
     */
    public function swarmUpdate(\DockerPhpClient\Model\SwarmSpec $body, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setRequired('version');
        $queryParam->setDefault('rotateWorkerToken', false);
        $queryParam->setDefault('rotateManagerToken', false);
        $queryParam->setDefault('rotateManagerUnlockKey', false);
        $url = '/v1.31/swarm/update';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($body, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return null;
            }
            if ('400' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
            if ('500' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
            if ('503' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
        }
        return $response;
    }
    /**
     * 
     *
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\DockerPhpClient\Model\SwarmUnlockkeyResponse200|\DockerPhpClient\Model\ErrorResponse
     */
    public function swarmUnlockkey($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.31/swarm/unlockkey';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\SwarmUnlockkeyResponse200', 'json');
            }
            if ('500' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
            if ('503' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
        }
        return $response;
    }
    /**
     * 
     *
     * @param \DockerPhpClient\Model\SwarmUnlockBody $body 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|null|\DockerPhpClient\Model\ErrorResponse
     */
    public function swarmUnlock(\DockerPhpClient\Model\SwarmUnlockBody $body, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.31/swarm/unlock';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost', 'Accept' => array('application/json'), 'Content-Type' => 'application/json'), $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($body, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return null;
            }
            if ('500' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
            if ('503' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
        }
        return $response;
    }
}