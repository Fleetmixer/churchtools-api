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
class AgendaItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\AgendaItemsItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\AgendaItemsItem';
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
        $object = new \ChurchTools\Api2\Model\AgendaItemsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('position', $data)) {
            $object->setPosition($data['position']);
            unset($data['position']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('note', $data)) {
            $object->setNote($data['note']);
            unset($data['note']);
        }
        if (\array_key_exists('duration', $data)) {
            $object->setDuration($data['duration']);
            unset($data['duration']);
        }
        if (\array_key_exists('start', $data)) {
            $object->setStart(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['start']));
            unset($data['start']);
        }
        if (\array_key_exists('isBeforeEvent', $data)) {
            $object->setIsBeforeEvent($data['isBeforeEvent']);
            unset($data['isBeforeEvent']);
        }
        if (\array_key_exists('responsible', $data)) {
            $object->setResponsible($this->denormalizer->denormalize($data['responsible'], 'ChurchTools\\Api2\\Model\\AgendaItemsItemResponsible', 'json', $context));
            unset($data['responsible']);
        }
        if (\array_key_exists('serviceGroupNotes', $data)) {
            $values = array();
            foreach ($data['serviceGroupNotes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ChurchTools\\Api2\\Model\\AgendaItemsItemServiceGroupNotesItem', 'json', $context);
            }
            $object->setServiceGroupNotes($values);
            unset($data['serviceGroupNotes']);
        }
        if (\array_key_exists('song', $data)) {
            $object->setSong($this->denormalizer->denormalize($data['song'], 'ChurchTools\\Api2\\Model\\AgendaItemsItemSong', 'json', $context));
            unset($data['song']);
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('position') && null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('title') && null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if ($object->isInitialized('note') && null !== $object->getNote()) {
            $data['note'] = $object->getNote();
        }
        if ($object->isInitialized('duration') && null !== $object->getDuration()) {
            $data['duration'] = $object->getDuration();
        }
        if ($object->isInitialized('start') && null !== $object->getStart()) {
            $data['start'] = $object->getStart()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('isBeforeEvent') && null !== $object->getIsBeforeEvent()) {
            $data['isBeforeEvent'] = $object->getIsBeforeEvent();
        }
        if ($object->isInitialized('responsible') && null !== $object->getResponsible()) {
            $data['responsible'] = $this->normalizer->normalize($object->getResponsible(), 'json', $context);
        }
        if ($object->isInitialized('serviceGroupNotes') && null !== $object->getServiceGroupNotes()) {
            $values = array();
            foreach ($object->getServiceGroupNotes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['serviceGroupNotes'] = $values;
        }
        if ($object->isInitialized('song') && null !== $object->getSong()) {
            $data['song'] = $this->normalizer->normalize($object->getSong(), 'json', $context);
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
        return array('ChurchTools\\Api2\\Model\\AgendaItemsItem' => false);
    }
}