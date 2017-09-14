<?php

namespace DockerPhpClient\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Joli\Jane\OpenApi\Runtime\Client\Resource;
class VolumeResource extends Resource
{
    /**
    * 
    *
    * @param array  $parameters {
    *     @var string $filters JSON encoded value of the filters (a `map[string][]string`) to
    process on the volumes list. Available filters:
    
    - `dangling=<boolean>` When set to `true` (or `1`), returns all
      volumes that are not in use by a container. When set to `false`
      (or `0`), only volumes that are in use by one or more
      containers are returned.
    - `driver=<volume-driver-name>` Matches volumes based on their driver.
    - `label=<key>` or `label=<key>:<value>` Matches volumes based on
      the presence of a `label` alone or a `label` and a value.
    - `name=<volume-name>` Matches all or part of a volume name.
    
    * }
    * @param string $fetch      Fetch mode (object or response)
    *
    * @return \Psr\Http\Message\ResponseInterface|\DockerPhpClient\Model\VolumesResponse200|\DockerPhpClient\Model\ErrorResponse
    */
    public function volumeList($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('filters', NULL);
        $url = '/v1.31/volumes';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost', 'Accept' => array('application/json')), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\VolumesResponse200', 'json');
            }
            if ('500' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
        }
        return $response;
    }
    /**
     * 
     *
     * @param \DockerPhpClient\Model\VolumesCreateBody $volumeConfig Volume configuration
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\DockerPhpClient\Model\Volume|\DockerPhpClient\Model\ErrorResponse
     */
    public function volumeCreate(\DockerPhpClient\Model\VolumesCreateBody $volumeConfig, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.31/volumes/create';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost', 'Accept' => array('application/json'), 'Content-Type' => 'application/json'), $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($volumeConfig, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('201' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\Volume', 'json');
            }
            if ('500' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
        }
        return $response;
    }
    /**
     * Instruct the driver to remove the volume.
     *
     * @param string $name Volume name or ID
     * @param array  $parameters {
     *     @var bool $force Force the removal of the volume
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|null|\DockerPhpClient\Model\ErrorResponse
     */
    public function volumeDelete($name, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('force', false);
        $url = '/v1.31/volumes/{name}';
        $url = str_replace('{name}', urlencode($name), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('204' == $response->getStatusCode()) {
                return null;
            }
            if ('404' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
            if ('409' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
            if ('500' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
        }
        return $response;
    }
    /**
     * 
     *
     * @param string $name Volume name or ID
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\DockerPhpClient\Model\Volume|\DockerPhpClient\Model\ErrorResponse
     */
    public function volumeInspect($name, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.31/volumes/{name}';
        $url = str_replace('{name}', urlencode($name), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost', 'Accept' => array('application/json')), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\Volume', 'json');
            }
            if ('404' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
            if ('500' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
        }
        return $response;
    }
    /**
    * 
    *
    * @param array  $parameters {
    *     @var string $filters Filters to process on the prune list, encoded as JSON (a `map[string][]string`).
    
    Available filters:
    - `label` (`label=<key>`, `label=<key>=<value>`, `label!=<key>`, or `label!=<key>=<value>`) Prune volumes with (or without, in case `label!=...` is used) the specified labels.
    
    * }
    * @param string $fetch      Fetch mode (object or response)
    *
    * @return \Psr\Http\Message\ResponseInterface|\DockerPhpClient\Model\VolumesPruneResponse200|\DockerPhpClient\Model\ErrorResponse
    */
    public function volumePrune($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('filters', NULL);
        $url = '/v1.31/volumes/prune';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost', 'Accept' => array('application/json')), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\VolumesPruneResponse200', 'json');
            }
            if ('500' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
        }
        return $response;
    }
}