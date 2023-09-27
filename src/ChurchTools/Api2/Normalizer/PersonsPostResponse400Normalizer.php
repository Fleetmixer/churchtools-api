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
class PersonsPostResponse400Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\PersonsPostResponse400';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\PersonsPostResponse400';
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
        $object = new \ChurchTools\Api2\Model\PersonsPostResponse400();
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
            $values = array();
            foreach ($data['args'] as $value) {
                $values[] = $value;
            }
            $object->setArgs($values);
            unset($data['args']);
        }
        if (\array_key_exists('errors', $data)) {
            $values_1 = array();
            foreach ($data['errors'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setErrors($values_1);
            unset($data['errors']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
            $values = array();
            foreach ($object->getArgs() as $value) {
                $values[] = $value;
            }
            $data['args'] = $values;
        }
        if ($object->isInitialized('errors') && null !== $object->getErrors()) {
            $values_1 = array();
            foreach ($object->getErrors() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['errors'] = $values_1;
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ChurchTools\\Api2\\Model\\PersonsPostResponse400' => false);
    }
}