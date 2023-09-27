<?php

namespace ChurchTools\Api2\Endpoint;

class GetTemplateById extends \ChurchTools\Api2\Runtime\Client\BaseEndpoint implements \ChurchTools\Api2\Runtime\Client\Endpoint
{
    protected $templateId;
    protected $accept;
    /**
     * 
     *
     * @param int $templateId ID of appointment template
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(int $templateId, array $accept = array())
    {
        $this->templateId = $templateId;
        $this->accept = $accept;
    }
    use \ChurchTools\Api2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
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
        if (empty($this->accept)) {
            return array('Accept' => array('application/json', 'text/plain'));
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ChurchTools\Api2\Exception\GetTemplateByIdForbiddenException
     * @throws \ChurchTools\Api2\Exception\GetTemplateByIdNotFoundException
     *
     * @return null|\ChurchTools\Api2\Model\CalendarsAppointmentsTemplatesTemplateIdGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\CalendarsAppointmentsTemplatesTemplateIdGetResponse200', 'json');
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\GetTemplateByIdForbiddenException($response);
        }
        if (404 === $status) {
            throw new \ChurchTools\Api2\Exception\GetTemplateByIdNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('login_token');
    }
}