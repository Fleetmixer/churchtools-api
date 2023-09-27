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
class AppointmentTemplateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\AppointmentTemplate';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\AppointmentTemplate';
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
        $object = new \ChurchTools\Api2\Model\AppointmentTemplate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('comment', $data)) {
            $object->setComment($data['comment']);
            unset($data['comment']);
        }
        if (\array_key_exists('startTime', $data)) {
            $object->setStartTime($data['startTime']);
            unset($data['startTime']);
        }
        if (\array_key_exists('duration', $data)) {
            $object->setDuration($data['duration']);
            unset($data['duration']);
        }
        if (\array_key_exists('allDay', $data)) {
            $object->setAllDay($data['allDay']);
            unset($data['allDay']);
        }
        if (\array_key_exists('note', $data)) {
            $object->setNote($data['note']);
            unset($data['note']);
        }
        if (\array_key_exists('isInternal', $data)) {
            $object->setIsInternal($data['isInternal']);
            unset($data['isInternal']);
        }
        if (\array_key_exists('categoryId', $data)) {
            $object->setCategoryId($data['categoryId']);
            unset($data['categoryId']);
        }
        if (\array_key_exists('repeatId', $data)) {
            $object->setRepeatId($data['repeatId']);
            unset($data['repeatId']);
        }
        if (\array_key_exists('repeatFrequence', $data)) {
            $object->setRepeatFrequence($data['repeatFrequence']);
            unset($data['repeatFrequence']);
        }
        if (\array_key_exists('repeatOptionId', $data)) {
            $object->setRepeatOptionId($data['repeatOptionId']);
            unset($data['repeatOptionId']);
        }
        if (\array_key_exists('repeatDuration', $data)) {
            $object->setRepeatDuration($data['repeatDuration']);
            unset($data['repeatDuration']);
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
        if ($object->isInitialized('title') && null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if ($object->isInitialized('comment') && null !== $object->getComment()) {
            $data['comment'] = $object->getComment();
        }
        if ($object->isInitialized('startTime') && null !== $object->getStartTime()) {
            $data['startTime'] = $object->getStartTime();
        }
        if ($object->isInitialized('duration') && null !== $object->getDuration()) {
            $data['duration'] = $object->getDuration();
        }
        if ($object->isInitialized('allDay') && null !== $object->getAllDay()) {
            $data['allDay'] = $object->getAllDay();
        }
        if ($object->isInitialized('note') && null !== $object->getNote()) {
            $data['note'] = $object->getNote();
        }
        if ($object->isInitialized('isInternal') && null !== $object->getIsInternal()) {
            $data['isInternal'] = $object->getIsInternal();
        }
        if ($object->isInitialized('categoryId') && null !== $object->getCategoryId()) {
            $data['categoryId'] = $object->getCategoryId();
        }
        if ($object->isInitialized('repeatId') && null !== $object->getRepeatId()) {
            $data['repeatId'] = $object->getRepeatId();
        }
        if ($object->isInitialized('repeatFrequence') && null !== $object->getRepeatFrequence()) {
            $data['repeatFrequence'] = $object->getRepeatFrequence();
        }
        if ($object->isInitialized('repeatOptionId') && null !== $object->getRepeatOptionId()) {
            $data['repeatOptionId'] = $object->getRepeatOptionId();
        }
        if ($object->isInitialized('repeatDuration') && null !== $object->getRepeatDuration()) {
            $data['repeatDuration'] = $object->getRepeatDuration();
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
        return array('ChurchTools\\Api2\\Model\\AppointmentTemplate' => false);
    }
}