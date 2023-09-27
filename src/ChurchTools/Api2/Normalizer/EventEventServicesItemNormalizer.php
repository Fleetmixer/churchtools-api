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
class EventEventServicesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\EventEventServicesItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\EventEventServicesItem';
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
        $object = new \ChurchTools\Api2\Model\EventEventServicesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('person', $data)) {
            $object->setPerson($data['person']);
            unset($data['person']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('serviceId', $data)) {
            $object->setServiceId($data['serviceId']);
            unset($data['serviceId']);
        }
        if (\array_key_exists('agreed', $data)) {
            $object->setAgreed($data['agreed']);
            unset($data['agreed']);
        }
        if (\array_key_exists('isValid', $data)) {
            $object->setIsValid($data['isValid']);
            unset($data['isValid']);
        }
        if (\array_key_exists('requestedDate', $data)) {
            $object->setRequestedDate(\DateTime::createFromFormat('Y-m-d', $data['requestedDate'])->setTime(0, 0, 0));
            unset($data['requestedDate']);
        }
        if (\array_key_exists('requesterPerson', $data)) {
            $object->setRequesterPerson($data['requesterPerson']);
            unset($data['requesterPerson']);
        }
        if (\array_key_exists('comment', $data)) {
            $object->setComment($data['comment']);
            unset($data['comment']);
        }
        if (\array_key_exists('counter', $data)) {
            $object->setCounter($data['counter']);
            unset($data['counter']);
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
        if ($object->isInitialized('person') && null !== $object->getPerson()) {
            $data['person'] = $object->getPerson();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('serviceId') && null !== $object->getServiceId()) {
            $data['serviceId'] = $object->getServiceId();
        }
        if ($object->isInitialized('agreed') && null !== $object->getAgreed()) {
            $data['agreed'] = $object->getAgreed();
        }
        if ($object->isInitialized('isValid') && null !== $object->getIsValid()) {
            $data['isValid'] = $object->getIsValid();
        }
        if ($object->isInitialized('requestedDate') && null !== $object->getRequestedDate()) {
            $data['requestedDate'] = $object->getRequestedDate()->format('Y-m-d');
        }
        if ($object->isInitialized('requesterPerson') && null !== $object->getRequesterPerson()) {
            $data['requesterPerson'] = $object->getRequesterPerson();
        }
        if ($object->isInitialized('comment') && null !== $object->getComment()) {
            $data['comment'] = $object->getComment();
        }
        if ($object->isInitialized('counter') && null !== $object->getCounter()) {
            $data['counter'] = $object->getCounter();
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
        return array('ChurchTools\\Api2\\Model\\EventEventServicesItem' => false);
    }
}