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
class AgendaItemsItemSongNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\AgendaItemsItemSong';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\AgendaItemsItemSong';
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
        $object = new \ChurchTools\Api2\Model\AgendaItemsItemSong();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('songId', $data)) {
            $object->setSongId($data['songId']);
            unset($data['songId']);
        }
        if (\array_key_exists('arrangementId', $data)) {
            $object->setArrangementId($data['arrangementId']);
            unset($data['arrangementId']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('arrangement', $data)) {
            $object->setArrangement($data['arrangement']);
            unset($data['arrangement']);
        }
        if (\array_key_exists('category', $data)) {
            $object->setCategory($data['category']);
            unset($data['category']);
        }
        if (\array_key_exists('key', $data)) {
            $object->setKey($data['key']);
            unset($data['key']);
        }
        if (\array_key_exists('bpm', $data)) {
            $object->setBpm($data['bpm']);
            unset($data['bpm']);
        }
        if (\array_key_exists('defaultArrangement', $data)) {
            $object->setDefaultArrangement($data['defaultArrangement']);
            unset($data['defaultArrangement']);
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
        if ($object->isInitialized('songId') && null !== $object->getSongId()) {
            $data['songId'] = $object->getSongId();
        }
        if ($object->isInitialized('arrangementId') && null !== $object->getArrangementId()) {
            $data['arrangementId'] = $object->getArrangementId();
        }
        if ($object->isInitialized('title') && null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if ($object->isInitialized('arrangement') && null !== $object->getArrangement()) {
            $data['arrangement'] = $object->getArrangement();
        }
        if ($object->isInitialized('category') && null !== $object->getCategory()) {
            $data['category'] = $object->getCategory();
        }
        if ($object->isInitialized('key') && null !== $object->getKey()) {
            $data['key'] = $object->getKey();
        }
        if ($object->isInitialized('bpm') && null !== $object->getBpm()) {
            $data['bpm'] = $object->getBpm();
        }
        if ($object->isInitialized('defaultArrangement') && null !== $object->getDefaultArrangement()) {
            $data['defaultArrangement'] = $object->getDefaultArrangement();
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
        return array('ChurchTools\\Api2\\Model\\AgendaItemsItemSong' => false);
    }
}