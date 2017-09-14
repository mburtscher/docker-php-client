<?php

namespace DockerPhpClient\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Joli\Jane\OpenApi\Runtime\Client\Resource;
class ConfigResource extends Resource
{
    /**
    * 
    *
    * @param array  $parameters {
    *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to process on the configs list. Available filters:
    
    - `id=<config id>`
    - `label=<key> or label=<key>=value`
    - `name=<config name>`
    - `names=<config name>`
    
    * }
    * @param string $fetch      Fetch mode (object or response)
    *
    * @return \Psr\Http\Message\ResponseInterface|\DockerPhpClient\Model\Config[]|\DockerPhpClient\Model\ErrorResponse
    */
    public function configList($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('filters', NULL);
        $url = '/v1.31/configs';
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
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\Config[]', 'json');
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
     * @param \DockerPhpClient\Model\ConfigsCreateBody $body 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\DockerPhpClient\Model\ConfigsCreateResponse201|\DockerPhpClient\Model\ErrorResponse
     */
    public function configCreate(\DockerPhpClient\Model\ConfigsCreateBody $body, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.31/configs/create';
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
            if ('201' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ConfigsCreateResponse201', 'json');
            }
            if ('409' == $response->getStatusCode()) {
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
     * @param string $id ID of the config
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|null|\DockerPhpClient\Model\ErrorResponse
     */
    public function configDelete($id, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.31/configs/{id}';
        $url = str_replace('{id}', urlencode($id), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost', 'Accept' => array('application/json')), $queryParam->buildHeaders($parameters));
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
     * @param string $id ID of the config
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\DockerPhpClient\Model\Config|\DockerPhpClient\Model\ErrorResponse
     */
    public function configInspect($id, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.31/configs/{id}';
        $url = str_replace('{id}', urlencode($id), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\Config', 'json');
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
     * @param string $id The ID or name of the config
     * @param \DockerPhpClient\Model\ConfigSpec $body The spec of the config to update. Currently, only the Labels field can be updated. All other fields must remain unchanged from the [ConfigInspect endpoint](#operation/ConfigInspect) response values.
     * @param array  $parameters {
     *     @var int $version The version number of the config object being updated. This is required to avoid conflicting writes.
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|null|\DockerPhpClient\Model\ErrorResponse
     */
    public function configUpdate($id, \DockerPhpClient\Model\ConfigSpec $body, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setRequired('version');
        $url = '/v1.31/configs/{id}/update';
        $url = str_replace('{id}', urlencode($id), $url);
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
}