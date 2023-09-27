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
class PersonPrivacyPolicyAgreementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\PersonPrivacyPolicyAgreement';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\PersonPrivacyPolicyAgreement';
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
        $object = new \ChurchTools\Api2\Model\PersonPrivacyPolicyAgreement();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('date', $data) && $data['date'] !== null) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d', $data['date'])->setTime(0, 0, 0));
            unset($data['date']);
        }
        elseif (\array_key_exists('date', $data) && $data['date'] === null) {
            $object->setDate(null);
        }
        if (\array_key_exists('typeId', $data) && $data['typeId'] !== null) {
            $object->setTypeId($data['typeId']);
            unset($data['typeId']);
        }
        elseif (\array_key_exists('typeId', $data) && $data['typeId'] === null) {
            $object->setTypeId(null);
        }
        if (\array_key_exists('whoId', $data) && $data['whoId'] !== null) {
            $object->setWhoId($data['whoId']);
            unset($data['whoId']);
        }
        elseif (\array_key_exists('whoId', $data) && $data['whoId'] === null) {
            $object->setWhoId(null);
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
        if ($object->isInitialized('date') && null !== $object->getDate()) {
            $data['date'] = $object->getDate()->format('Y-m-d');
        }
        if ($object->isInitialized('typeId') && null !== $object->getTypeId()) {
            $data['typeId'] = $object->getTypeId();
        }
        if ($object->isInitialized('whoId') && null !== $object->getWhoId()) {
            $data['whoId'] = $object->getWhoId();
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
        return array('ChurchTools\\Api2\\Model\\PersonPrivacyPolicyAgreement' => false);
    }
}