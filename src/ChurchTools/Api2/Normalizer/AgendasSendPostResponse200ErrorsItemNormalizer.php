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
class AgendasSendPostResponse200ErrorsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\AgendasSendPostResponse200ErrorsItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\AgendasSendPostResponse200ErrorsItem';
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
        $object = new \ChurchTools\Api2\Model\AgendasSendPostResponse200ErrorsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('titel', $data)) {
            $object->setTitel($data['titel']);
            unset($data['titel']);
        }
        if (\array_key_exists('domainType', $data)) {
            $object->setDomainType($data['domainType']);
            unset($data['domainType']);
        }
        if (\array_key_exists('domainIdentifier', $data)) {
            $object->setDomainIdentifier($data['domainIdentifier']);
            unset($data['domainIdentifier']);
        }
        if (\array_key_exists('apiUrl', $data)) {
            $object->setApiUrl($data['apiUrl']);
            unset($data['apiUrl']);
        }
        if (\array_key_exists('frontendUrl', $data)) {
            $object->setFrontendUrl($data['frontendUrl']);
            unset($data['frontendUrl']);
        }
        if (\array_key_exists('imageUrl', $data)) {
            $object->setImageUrl($data['imageUrl']);
            unset($data['imageUrl']);
        }
        if (\array_key_exists('domainAttributes', $data)) {
            $object->setDomainAttributes($this->denormalizer->denormalize($data['domainAttributes'], 'ChurchTools\\Api2\\Model\\AgendasSendPostResponse200ErrorsItemDomainAttributes', 'json', $context));
            unset($data['domainAttributes']);
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
        if ($object->isInitialized('titel') && null !== $object->getTitel()) {
            $data['titel'] = $object->getTitel();
        }
        if ($object->isInitialized('domainType') && null !== $object->getDomainType()) {
            $data['domainType'] = $object->getDomainType();
        }
        if ($object->isInitialized('domainIdentifier') && null !== $object->getDomainIdentifier()) {
            $data['domainIdentifier'] = $object->getDomainIdentifier();
        }
        if ($object->isInitialized('apiUrl') && null !== $object->getApiUrl()) {
            $data['apiUrl'] = $object->getApiUrl();
        }
        if ($object->isInitialized('frontendUrl') && null !== $object->getFrontendUrl()) {
            $data['frontendUrl'] = $object->getFrontendUrl();
        }
        if ($object->isInitialized('imageUrl') && null !== $object->getImageUrl()) {
            $data['imageUrl'] = $object->getImageUrl();
        }
        if ($object->isInitialized('domainAttributes') && null !== $object->getDomainAttributes()) {
            $data['domainAttributes'] = $this->normalizer->normalize($object->getDomainAttributes(), 'json', $context);
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
        return array('ChurchTools\\Api2\\Model\\AgendasSendPostResponse200ErrorsItem' => false);
    }
}