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
class StatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\Status';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\Status';
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
        $object = new \ChurchTools\Api2\Model\Status();
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
        if (\array_key_exists('shorty', $data)) {
            $object->setShorty($data['shorty']);
            unset($data['shorty']);
        }
        if (\array_key_exists('isMember', $data)) {
            $object->setIsMember($data['isMember']);
            unset($data['isMember']);
        }
        if (\array_key_exists('isSearchable', $data)) {
            $object->setIsSearchable($data['isSearchable']);
            unset($data['isSearchable']);
        }
        if (\array_key_exists('sortKey', $data)) {
            $object->setSortKey($data['sortKey']);
            unset($data['sortKey']);
        }
        if (\array_key_exists('securityLevelId', $data)) {
            $object->setSecurityLevelId($data['securityLevelId']);
            unset($data['securityLevelId']);
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
        if ($object->isInitialized('shorty') && null !== $object->getShorty()) {
            $data['shorty'] = $object->getShorty();
        }
        if ($object->isInitialized('isMember') && null !== $object->getIsMember()) {
            $data['isMember'] = $object->getIsMember();
        }
        if ($object->isInitialized('isSearchable') && null !== $object->getIsSearchable()) {
            $data['isSearchable'] = $object->getIsSearchable();
        }
        if ($object->isInitialized('sortKey') && null !== $object->getSortKey()) {
            $data['sortKey'] = $object->getSortKey();
        }
        if ($object->isInitialized('securityLevelId') && null !== $object->getSecurityLevelId()) {
            $data['securityLevelId'] = $object->getSecurityLevelId();
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
        return array('ChurchTools\\Api2\\Model\\Status' => false);
    }
}