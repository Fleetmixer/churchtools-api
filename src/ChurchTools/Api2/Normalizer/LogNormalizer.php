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
class LogNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\Log';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\Log';
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
        $object = new \ChurchTools\Api2\Model\Log();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('level', $data)) {
            $object->setLevel($data['level']);
            unset($data['level']);
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['date']));
            unset($data['date']);
        }
        if (\array_key_exists('personId', $data)) {
            $object->setPersonId($data['personId']);
            unset($data['personId']);
        }
        if (\array_key_exists('simultePersonId', $data) && $data['simultePersonId'] !== null) {
            $object->setSimultePersonId($data['simultePersonId']);
            unset($data['simultePersonId']);
        }
        elseif (\array_key_exists('simultePersonId', $data) && $data['simultePersonId'] === null) {
            $object->setSimultePersonId(null);
        }
        if (\array_key_exists('domainType', $data)) {
            $object->setDomainType($data['domainType']);
            unset($data['domainType']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
            unset($data['domainId']);
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
            unset($data['message']);
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
        if ($object->isInitialized('level') && null !== $object->getLevel()) {
            $data['level'] = $object->getLevel();
        }
        if ($object->isInitialized('date') && null !== $object->getDate()) {
            $data['date'] = $object->getDate()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('personId') && null !== $object->getPersonId()) {
            $data['personId'] = $object->getPersonId();
        }
        if ($object->isInitialized('simultePersonId') && null !== $object->getSimultePersonId()) {
            $data['simultePersonId'] = $object->getSimultePersonId();
        }
        if ($object->isInitialized('domainType') && null !== $object->getDomainType()) {
            $data['domainType'] = $object->getDomainType();
        }
        if ($object->isInitialized('domainId') && null !== $object->getDomainId()) {
            $data['domainId'] = $object->getDomainId();
        }
        if ($object->isInitialized('message') && null !== $object->getMessage()) {
            $data['message'] = $object->getMessage();
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
        return array('ChurchTools\\Api2\\Model\\Log' => false);
    }
}