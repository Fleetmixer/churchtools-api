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
class AgendaItemsItemResponsibleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\AgendaItemsItemResponsible';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\AgendaItemsItemResponsible';
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
        $object = new \ChurchTools\Api2\Model\AgendaItemsItemResponsible();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
            unset($data['text']);
        }
        if (\array_key_exists('persons', $data)) {
            $values = array();
            foreach ($data['persons'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ChurchTools\\Api2\\Model\\AgendaItemsItemResponsiblePersonsItem', 'json', $context);
            }
            $object->setPersons($values);
            unset($data['persons']);
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
        if ($object->isInitialized('text') && null !== $object->getText()) {
            $data['text'] = $object->getText();
        }
        if ($object->isInitialized('persons') && null !== $object->getPersons()) {
            $values = array();
            foreach ($object->getPersons() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['persons'] = $values;
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
        return array('ChurchTools\\Api2\\Model\\AgendaItemsItemResponsible' => false);
    }
}