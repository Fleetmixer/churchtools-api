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
class ServiceGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\ServiceGroup';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\ServiceGroup';
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
        $object = new \ChurchTools\Api2\Model\ServiceGroup();
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
        if (\array_key_exists('sortKey', $data)) {
            $object->setSortKey($data['sortKey']);
            unset($data['sortKey']);
        }
        if (\array_key_exists('viewAll', $data)) {
            $object->setViewAll($data['viewAll']);
            unset($data['viewAll']);
        }
        if (\array_key_exists('campusId', $data) && $data['campusId'] !== null) {
            $object->setCampusId($data['campusId']);
            unset($data['campusId']);
        }
        elseif (\array_key_exists('campusId', $data) && $data['campusId'] === null) {
            $object->setCampusId(null);
        }
        if (\array_key_exists('onlyVisibleInCampusFilter', $data)) {
            $object->setOnlyVisibleInCampusFilter($data['onlyVisibleInCampusFilter']);
            unset($data['onlyVisibleInCampusFilter']);
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
        if ($object->isInitialized('sortKey') && null !== $object->getSortKey()) {
            $data['sortKey'] = $object->getSortKey();
        }
        if ($object->isInitialized('viewAll') && null !== $object->getViewAll()) {
            $data['viewAll'] = $object->getViewAll();
        }
        if ($object->isInitialized('campusId') && null !== $object->getCampusId()) {
            $data['campusId'] = $object->getCampusId();
        }
        if ($object->isInitialized('onlyVisibleInCampusFilter') && null !== $object->getOnlyVisibleInCampusFilter()) {
            $data['onlyVisibleInCampusFilter'] = $object->getOnlyVisibleInCampusFilter();
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
        return array('ChurchTools\\Api2\\Model\\ServiceGroup' => false);
    }
}