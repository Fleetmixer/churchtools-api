<?php

namespace ChurchTools\Api2\Endpoint;

class GetPersonSetting extends \ChurchTools\Api2\Runtime\Client\BaseEndpoint implements \ChurchTools\Api2\Runtime\Client\Endpoint
{
    protected $id;
    protected $module;
    protected $attribute;
    protected $accept;
    /**
     * To retrieve a specific person setting, use this endpoint. A setting is identifies by `module` and `attribute`.
     *
     * @param string $id ID or GUID of person
     * @param string $module Module name like `churchdb` or `churchservice`
     * @param string $attribute Attribute name of setting
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(string $id, string $module, string $attribute, array $accept = array())
    {
        $this->id = $id;
        $this->module = $module;
        $this->attribute = $attribute;
        $this->accept = $accept;
    }
    use \ChurchTools\Api2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{module}', '{attribute}'), array($this->id, $this->module, $this->attribute), '/persons/{id}/settings/{module}/{attribute}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return array('Accept' => array('application/json', 'text/plain'));
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ChurchTools\Api2\Exception\GetPersonSettingForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsIdSettingsModuleAttributeGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\PersonsIdSettingsModuleAttributeGetResponse200', 'json');
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\GetPersonSettingForbiddenException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('login_token');
    }
}