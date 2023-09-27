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
class GroupFollowUpNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\GroupFollowUp';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\GroupFollowUp';
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
        $object = new \ChurchTools\Api2\Model\GroupFollowUp();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('typeId', $data)) {
            $object->setTypeId($data['typeId']);
            unset($data['typeId']);
        }
        if (\array_key_exists('targetTypeId', $data)) {
            $object->setTargetTypeId($data['targetTypeId']);
            unset($data['targetTypeId']);
        }
        if (\array_key_exists('targetObjectId', $data) && $data['targetObjectId'] !== null) {
            $object->setTargetObjectId($data['targetObjectId']);
            unset($data['targetObjectId']);
        }
        elseif (\array_key_exists('targetObjectId', $data) && $data['targetObjectId'] === null) {
            $object->setTargetObjectId(null);
        }
        if (\array_key_exists('targetGroupMemberStatusId', $data) && $data['targetGroupMemberStatusId'] !== null) {
            $object->setTargetGroupMemberStatusId($data['targetGroupMemberStatusId']);
            unset($data['targetGroupMemberStatusId']);
        }
        elseif (\array_key_exists('targetGroupMemberStatusId', $data) && $data['targetGroupMemberStatusId'] === null) {
            $object->setTargetGroupMemberStatusId(null);
        }
        if (\array_key_exists('sendReminderMails', $data)) {
            $object->setSendReminderMails($data['sendReminderMails']);
            unset($data['sendReminderMails']);
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
        if ($object->isInitialized('typeId') && null !== $object->getTypeId()) {
            $data['typeId'] = $object->getTypeId();
        }
        if ($object->isInitialized('targetTypeId') && null !== $object->getTargetTypeId()) {
            $data['targetTypeId'] = $object->getTargetTypeId();
        }
        if ($object->isInitialized('targetObjectId') && null !== $object->getTargetObjectId()) {
            $data['targetObjectId'] = $object->getTargetObjectId();
        }
        if ($object->isInitialized('targetGroupMemberStatusId') && null !== $object->getTargetGroupMemberStatusId()) {
            $data['targetGroupMemberStatusId'] = $object->getTargetGroupMemberStatusId();
        }
        if ($object->isInitialized('sendReminderMails') && null !== $object->getSendReminderMails()) {
            $data['sendReminderMails'] = $object->getSendReminderMails();
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
        return array('ChurchTools\\Api2\\Model\\GroupFollowUp' => false);
    }
}