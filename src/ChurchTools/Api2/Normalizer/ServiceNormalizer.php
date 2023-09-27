<?php

namespace ChurchTools\Api2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ChurchTools\Api2\Runtime\Normalizer\CheckArray;
use ChurchTools\Api2\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\Service';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\Service';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ChurchTools\Api2\Model\Service();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('serviceGroupId', $data)) {
            $object->setServiceGroupId($data['serviceGroupId']);
            unset($data['serviceGroupId']);
        }
        if (\array_key_exists('commentOnConfirmation', $data)) {
            $object->setCommentOnConfirmation($data['commentOnConfirmation']);
            unset($data['commentOnConfirmation']);
        }
        if (\array_key_exists('sortKey', $data)) {
            $object->setSortKey($data['sortKey']);
            unset($data['sortKey']);
        }
        if (\array_key_exists('allowDecline', $data)) {
            $object->setAllowDecline($data['allowDecline']);
            unset($data['allowDecline']);
        }
        if (\array_key_exists('allowExchange', $data)) {
            $object->setAllowExchange($data['allowExchange']);
            unset($data['allowExchange']);
        }
        if (\array_key_exists('comment', $data)) {
            $object->setComment($data['comment']);
            unset($data['comment']);
        }
        if (\array_key_exists('standard', $data)) {
            $object->setStandard($data['standard']);
            unset($data['standard']);
        }
        if (\array_key_exists('hidePersonName', $data)) {
            $object->setHidePersonName($data['hidePersonName']);
            unset($data['hidePersonName']);
        }
        if (\array_key_exists('sendReminderMails', $data)) {
            $object->setSendReminderMails($data['sendReminderMails']);
            unset($data['sendReminderMails']);
        }
        if (\array_key_exists('sendServiceRequestEmails', $data)) {
            $object->setSendServiceRequestEmails($data['sendServiceRequestEmails']);
            unset($data['sendServiceRequestEmails']);
        }
        if (\array_key_exists('allowControlLiveAgenda', $data)) {
            $object->setAllowControlLiveAgenda($data['allowControlLiveAgenda']);
            unset($data['allowControlLiveAgenda']);
        }
        if (\array_key_exists('groupIds', $data) && $data['groupIds'] !== null) {
            $object->setGroupIds($data['groupIds']);
            unset($data['groupIds']);
        }
        elseif (\array_key_exists('groupIds', $data) && $data['groupIds'] === null) {
            $object->setGroupIds(null);
        }
        if (\array_key_exists('tagIds', $data) && $data['tagIds'] !== null) {
            $object->setTagIds($data['tagIds']);
            unset($data['tagIds']);
        }
        elseif (\array_key_exists('tagIds', $data) && $data['tagIds'] === null) {
            $object->setTagIds(null);
        }
        if (\array_key_exists('calTextTemplate', $data)) {
            $object->setCalTextTemplate($data['calTextTemplate']);
            unset($data['calTextTemplate']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('serviceGroupId') && null !== $object->getServiceGroupId()) {
            $data['serviceGroupId'] = $object->getServiceGroupId();
        }
        if ($object->isInitialized('commentOnConfirmation') && null !== $object->getCommentOnConfirmation()) {
            $data['commentOnConfirmation'] = $object->getCommentOnConfirmation();
        }
        if ($object->isInitialized('sortKey') && null !== $object->getSortKey()) {
            $data['sortKey'] = $object->getSortKey();
        }
        if ($object->isInitialized('allowDecline') && null !== $object->getAllowDecline()) {
            $data['allowDecline'] = $object->getAllowDecline();
        }
        if ($object->isInitialized('allowExchange') && null !== $object->getAllowExchange()) {
            $data['allowExchange'] = $object->getAllowExchange();
        }
        if ($object->isInitialized('comment') && null !== $object->getComment()) {
            $data['comment'] = $object->getComment();
        }
        if ($object->isInitialized('standard') && null !== $object->getStandard()) {
            $data['standard'] = $object->getStandard();
        }
        if ($object->isInitialized('hidePersonName') && null !== $object->getHidePersonName()) {
            $data['hidePersonName'] = $object->getHidePersonName();
        }
        if ($object->isInitialized('sendReminderMails') && null !== $object->getSendReminderMails()) {
            $data['sendReminderMails'] = $object->getSendReminderMails();
        }
        if ($object->isInitialized('sendServiceRequestEmails') && null !== $object->getSendServiceRequestEmails()) {
            $data['sendServiceRequestEmails'] = $object->getSendServiceRequestEmails();
        }
        if ($object->isInitialized('allowControlLiveAgenda') && null !== $object->getAllowControlLiveAgenda()) {
            $data['allowControlLiveAgenda'] = $object->getAllowControlLiveAgenda();
        }
        if ($object->isInitialized('groupIds') && null !== $object->getGroupIds()) {
            $data['groupIds'] = $object->getGroupIds();
        }
        if ($object->isInitialized('tagIds') && null !== $object->getTagIds()) {
            $data['tagIds'] = $object->getTagIds();
        }
        if ($object->isInitialized('calTextTemplate') && null !== $object->getCalTextTemplate()) {
            $data['calTextTemplate'] = $object->getCalTextTemplate();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ChurchTools\\Api2\\Model\\Service' => false);
    }
}