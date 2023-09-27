<?php

namespace ChurchTools\Api2\Endpoint;

class DeleteTemplate extends \ChurchTools\Api2\Runtime\Client\BaseEndpoint implements \ChurchTools\Api2\Runtime\Client\Endpoint
{
    protected $templateId;
    /**
     * 
     *
     * @param int $templateId ID of appointment template
     */
    public function __construct(int $templateId)
    {
        $this->templateId = $templateId;
    }
    use \ChurchTools\Api2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{templateId}'), array($this->templateId), '/calendars/appointments/templates/{templateId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('text/plain'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ChurchTools\Api2\Exception\DeleteTemplateForbiddenException
     * @throws \ChurchTools\Api2\Exception\DeleteTemplateNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\DeleteTemplateForbiddenException($response);
        }
        if (404 === $status) {
            throw new \ChurchTools\Api2\Exception\DeleteTemplateNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('login_token');
    }
}