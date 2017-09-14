<?php

namespace DockerPhpClient\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Joli\Jane\OpenApi\Runtime\Client\Resource;
class PluginResource extends Resource
{
    /**
    * Returns information about installed plugins.
    *
    * @param array  $parameters {
    *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to process on the plugin list. Available filters:
    
    - `capability=<capability name>`
    - `enable=<true>|<false>`
    
    * }
    * @param string $fetch      Fetch mode (object or response)
    *
    * @return \Psr\Http\Message\ResponseInterface|\DockerPhpClient\Model\Plugin[]|\DockerPhpClient\Model\ErrorResponse
    */
    public function pluginList($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('filters', NULL);
        $url = '/v1.31/plugins';
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
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\Plugin[]', 'json');
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
     *     @var string $remote The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|null|\DockerPhpClient\Model\ErrorResponse
     */
    public function getPluginPrivileges($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setRequired('remote');
        $url = '/v1.31/plugins/privileges';
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
                return null;
            }
            if ('500' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
        }
        return $response;
    }
    /**
    * Pulls and installs a plugin. After the plugin is installed, it can be enabled using the [`POST /plugins/{name}/enable` endpoint](#operation/PostPluginsEnable).
    
    *
    * @param array $body 
    * @param array  $parameters {
    *     @var string $remote Remote reference for plugin to install.
    
    The `:latest` tag is optional, and is used as the default if omitted.
    
    *     @var string $name Local name for the pulled plugin.
    
    The `:latest` tag is optional, and is used as the default if omitted.
    
    *     @var string $X-Registry-Auth A base64-encoded auth configuration to use when pulling a plugin from a registry. [See the authentication section for details.](#section/Authentication)
    * }
    * @param string $fetch      Fetch mode (object or response)
    *
    * @return \Psr\Http\Message\ResponseInterface|null|\DockerPhpClient\Model\ErrorResponse
    */
    public function pluginPull(array $body, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setRequired('remote');
        $queryParam->setDefault('name', NULL);
        $queryParam->setDefault('X-Registry-Auth', NULL);
        $queryParam->setHeaderParameters(array('X-Registry-Auth'));
        $url = '/v1.31/plugins/pull';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost', 'Accept' => array('application/json'), 'Content-Type' => 'application/json'), $queryParam->buildHeaders($parameters));
        $body = $body;
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('204' == $response->getStatusCode()) {
                return null;
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
     * @param string $name The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\DockerPhpClient\Model\Plugin|\DockerPhpClient\Model\ErrorResponse
     */
    public function pluginInspect($name, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.31/plugins/{name}/json';
        $url = str_replace('{name}', urlencode($name), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\Plugin', 'json');
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
     * @param string $name The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
     * @param array  $parameters {
     *     @var bool $force Disable the plugin before removing. This may result in issues if the plugin is in use by a container.
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\DockerPhpClient\Model\Plugin|\DockerPhpClient\Model\ErrorResponse
     */
    public function pluginDelete($name, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('force', false);
        $url = '/v1.31/plugins/{name}';
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
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\Plugin', 'json');
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
     * @param string $name The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
     * @param array  $parameters {
     *     @var int $timeout Set the HTTP client timeout (in seconds)
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|null|\DockerPhpClient\Model\ErrorResponse
     */
    public function pluginEnable($name, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('timeout', 0);
        $url = '/v1.31/plugins/{name}/enable';
        $url = str_replace('{name}', urlencode($name), $url);
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
     * @param string $name The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|null|\DockerPhpClient\Model\ErrorResponse
     */
    public function pluginDisable($name, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.31/plugins/{name}/disable';
        $url = str_replace('{name}', urlencode($name), $url);
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
    * @param string $name The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
    * @param array $body 
    * @param array  $parameters {
    *     @var string $remote Remote reference to upgrade to.
    
    The `:latest` tag is optional, and is used as the default if omitted.
    
    *     @var string $X-Registry-Auth A base64-encoded auth configuration to use when pulling a plugin from a registry. [See the authentication section for details.](#section/Authentication)
    * }
    * @param string $fetch      Fetch mode (object or response)
    *
    * @return \Psr\Http\Message\ResponseInterface|null|\DockerPhpClient\Model\ErrorResponse
    */
    public function pluginUpgrade($name, array $body, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setRequired('remote');
        $queryParam->setDefault('X-Registry-Auth', NULL);
        $queryParam->setHeaderParameters(array('X-Registry-Auth'));
        $url = '/v1.31/plugins/{name}/upgrade';
        $url = str_replace('{name}', urlencode($name), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $body;
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
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
        }
        return $response;
    }
    /**
     * 
     *
     * @param string $tarContext Path to tar containing plugin rootfs and manifest
     * @param array  $parameters {
     *     @var string $name The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|null|\DockerPhpClient\Model\ErrorResponse
     */
    public function pluginCreate($tarContext, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setRequired('name');
        $url = '/v1.31/plugins/create';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $tarContext;
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('204' == $response->getStatusCode()) {
                return null;
            }
            if ('500' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'DockerPhpClient\\Model\\ErrorResponse', 'json');
            }
        }
        return $response;
    }
    /**
     * Push a plugin to the registry.
     *
     * @param string $name The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|null|\DockerPhpClient\Model\ErrorResponse
     */
    public function pluginPush($name, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.31/plugins/{name}/push';
        $url = str_replace('{name}', urlencode($name), $url);
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
     * @param string $name The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
     * @param array $body 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|null|\DockerPhpClient\Model\ErrorResponse
     */
    public function pluginSet($name, array $body, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.31/plugins/{name}/set';
        $url = str_replace('{name}', urlencode($name), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $body;
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
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
        }
        return $response;
    }
}