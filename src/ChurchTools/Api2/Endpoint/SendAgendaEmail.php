<?php

namespace ChurchTools\Api2\Endpoint;

class SendAgendaEmail extends \ChurchTools\Api2\Runtime\Client\BaseEndpoint implements \ChurchTools\Api2\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * A agenda can be sent to multiple people at once. Recipients can be participants of one of the events, whereby the user sending the mail MUST see the service groups, or the user can add additional recipients from the list of people the user can see. To send a mail the user MUST see the agenda.
     *
     * @param \ChurchTools\Api2\Model\AgendasSendPostBody $requestBody 
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(\ChurchTools\Api2\Model\AgendasSendPostBody $requestBody, array $accept = array())
    {
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \ChurchTools\Api2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/agendas/send';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ChurchTools\Api2\Model\AgendasSendPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
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
     * @throws \ChurchTools\Api2\Exception\SendAgendaEmailBadRequestException
     * @throws \ChurchTools\Api2\Exception\SendAgendaEmailForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\AgendasSendPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\AgendasSendPostResponse200', 'json');
        }
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \ChurchTools\Api2\Exception\SendAgendaEmailBadRequestException($response);
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\SendAgendaEmailForbiddenException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('login_token');
    }
}