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
class AgendasSendPostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\AgendasSendPostResponse200';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\AgendasSendPostResponse200';
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
        $object = new \ChurchTools\Api2\Model\AgendasSendPostResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
            unset($data['message']);
        }
        if (\array_key_exists('translatedMessage', $data)) {
            $object->setTranslatedMessage($data['translatedMessage']);
            unset($data['translatedMessage']);
        }
        if (\array_key_exists('messageKey', $data)) {
            $object->setMessageKey($data['messageKey']);
            unset($data['messageKey']);
        }
        if (\array_key_exists('args', $data)) {
            $object->setArgs($this->denormalizer->denormalize($data['args'], 'ChurchTools\\Api2\\Model\\AgendasSendPostResponse200Args', 'json', $context));
            unset($data['args']);
        }
        if (\array_key_exists('errors', $data)) {
            $values = array();
            foreach ($data['errors'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ChurchTools\\Api2\\Model\\AgendasSendPostResponse200ErrorsItem', 'json', $context);
            }
            $object->setErrors($values);
            unset($data['errors']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('message') && null !== $object->getMessage()) {
            $data['message'] = $object->getMessage();
        }
        if ($object->isInitialized('translatedMessage') && null !== $object->getTranslatedMessage()) {
            $data['translatedMessage'] = $object->getTranslatedMessage();
        }
        if ($object->isInitialized('messageKey') && null !== $object->getMessageKey()) {
            $data['messageKey'] = $object->getMessageKey();
        }
        if ($object->isInitialized('args') && null !== $object->getArgs()) {
            $data['args'] = $this->normalizer->normalize($object->getArgs(), 'json', $context);
        }
        if ($object->isInitialized('errors') && null !== $object->getErrors()) {
            $values = array();
            foreach ($object->getErrors() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['errors'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ChurchTools\\Api2\\Model\\AgendasSendPostResponse200' => false);
    }
}