<?php

namespace DockerPhpClient\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Joli\Jane\OpenApi\Runtime\Client\Resource;
class ExecResource extends Resource
{
    /**
     * Run a command inside a running container.
     *
     * @param string $id ID or name of container
     * @param \DockerPhpClient\Model\ContainersIdExecBody $execConfig Exec configuration
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\DockerPhpClient\Model\IdResponse|\DockerPhpClient\Model\ErrorResponse
     */
    public function containerExec($id, \DockerPhpClient\Model\ContainersIdExecBody $execConfig, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.31/containers/{id}/exec';
        $url = str_replace('{id}', urlencode($id), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost', 'Accept' => array('application/json'), 'Content-Type' => 'application/json'), $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($execConfig, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('201' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\IdResponse', 'json');
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
     * Starts a previously set up exec instance. If detach is true, this endpoint returns immediately after starting the command. Otherwise, it sets up an interactive session with the command.
     *
     * @param string $id Exec instance ID
     * @param \DockerPhpClient\Model\ExecIdStartBody $execStartConfig 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|null|\DockerPhpClient\Model\ErrorResponse
     */
    public function execStart($id, \DockerPhpClient\Model\ExecIdStartBody $execStartConfig, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.31/exec/{id}/start';
        $url = str_replace('{id}', urlencode($id), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($execStartConfig, 'json');
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
            if ('404' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
            if ('409' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
        }
        return $response;
    }
    /**
     * Resize the TTY session used by an exec instance. This endpoint only works if `tty` was specified as part of creating and starting the exec instance.
     *
     * @param string $id Exec instance ID
     * @param array  $parameters {
     *     @var int $h Height of the TTY session in characters
     *     @var int $w Width of the TTY session in characters
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|null|\DockerPhpClient\Model\ErrorResponse
     */
    public function execResize($id, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('h', NULL);
        $queryParam->setDefault('w', NULL);
        $url = '/v1.31/exec/{id}/resize';
        $url = str_replace('{id}', urlencode($id), $url);
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
            if ('201' == $response->getStatusCode()) {
                return null;
            }
            if ('404' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
        }
        return $response;
    }
    /**
     * Return low-level information about an exec instance.
     *
     * @param string $id Exec instance ID
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\DockerPhpClient\Model\ExecIdJsonResponse200|\DockerPhpClient\Model\ErrorResponse
     */
    public function execInspect($id, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.31/exec/{id}/json';
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
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ExecIdJsonResponse200', 'json');
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
}