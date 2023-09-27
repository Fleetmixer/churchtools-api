<?php

namespace ChurchTools\Api2\Endpoint;

class UpdateTemplate extends \ChurchTools\Api2\Runtime\Client\BaseEndpoint implements \ChurchTools\Api2\Runtime\Client\Endpoint
{
    protected $templateId;
    protected $accept;
    /**
     * 
     *
     * @param int $templateId ID of appointment template
     * @param \stdClass $requestBody 
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(int $templateId, \stdClass $requestBody, array $accept = array())
    {
        $this->templateId = $templateId;
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \ChurchTools\Api2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{templateId}'), array($this->templateId), '/calendars/appointments/templates/{templateId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \stdClass) {
            return array(array('Content-Type' => array('application/json')), json_encode($this->body));
        }
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
     * @throws \ChurchTools\Api2\Exception\UpdateTemplateForbiddenException
     * @throws \ChurchTools\Api2\Exception\UpdateTemplateNotFoundException
     *
     * @return null|\ChurchTools\Api2\Model\CalendarsAppointmentsTemplatesTemplateIdPutResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\CalendarsAppointmentsTemplatesTemplateIdPutResponse200', 'json');
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\UpdateTemplateForbiddenException($response);
        }
        if (404 === $status) {
            throw new \ChurchTools\Api2\Exception\UpdateTemplateNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('login_token');
    }
}