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
class CalendarsAppointmentsTemplatesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\CalendarsAppointmentsTemplatesPostBody';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\CalendarsAppointmentsTemplatesPostBody';
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
        $object = new \ChurchTools\Api2\Model\CalendarsAppointmentsTemplatesPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        $data['title'] = $object->getTitle();
        if ($object->isInitialized('comment') && null !== $object->getComment()) {
            $data['comment'] = $object->getComment();
        }
        $data['startTime'] = $object->getStartTime();
        $data['duration'] = $object->getDuration();
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
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ChurchTools\\Api2\\Model\\CalendarsAppointmentsTemplatesPostBody' => false);
    }
}