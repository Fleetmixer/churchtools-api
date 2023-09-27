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
class FieldsGetResponse200DataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\FieldsGetResponse200DataItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\FieldsGetResponse200DataItem';
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
        $object = new \ChurchTools\Api2\Model\FieldsGetResponse200DataItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('key', $data)) {
            $object->setKey($data['key']);
            unset($data['key']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('shorty', $data)) {
            $object->setShorty($data['shorty']);
            unset($data['shorty']);
        }
        if (\array_key_exists('fieldCategoryCode', $data)) {
            $object->setFieldCategoryCode($data['fieldCategoryCode']);
            unset($data['fieldCategoryCode']);
        }
        if (\array_key_exists('fieldTypeCode', $data)) {
            $object->setFieldTypeCode($data['fieldTypeCode']);
            unset($data['fieldTypeCode']);
        }
        if (\array_key_exists('isActive', $data)) {
            $object->setIsActive($data['isActive']);
            unset($data['isActive']);
        }
        if (\array_key_exists('isNewPersonField', $data)) {
            $object->setIsNewPersonField($data['isNewPersonField']);
            unset($data['isNewPersonField']);
        }
        if (\array_key_exists('lineEnding', $data)) {
            $object->setLineEnding($data['lineEnding']);
            unset($data['lineEnding']);
        }
        if (\array_key_exists('secLevel', $data)) {
            $object->setSecLevel($data['secLevel']);
            unset($data['secLevel']);
        }
        if (\array_key_exists('length', $data) && $data['length'] !== null) {
            $object->setLength($data['length']);
            unset($data['length']);
        }
        elseif (\array_key_exists('length', $data) && $data['length'] === null) {
            $object->setLength(null);
        }
        if (\array_key_exists('deleteOnArchive', $data)) {
            $object->setDeleteOnArchive($data['deleteOnArchive']);
            unset($data['deleteOnArchive']);
        }
        if (\array_key_exists('nullable', $data)) {
            $object->setNullable($data['nullable']);
            unset($data['nullable']);
        }
        if (\array_key_exists('sortKey', $data)) {
            $object->setSortKey($data['sortKey']);
            unset($data['sortKey']);
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
        if ($object->isInitialized('key') && null !== $object->getKey()) {
            $data['key'] = $object->getKey();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('shorty') && null !== $object->getShorty()) {
            $data['shorty'] = $object->getShorty();
        }
        if ($object->isInitialized('fieldCategoryCode') && null !== $object->getFieldCategoryCode()) {
            $data['fieldCategoryCode'] = $object->getFieldCategoryCode();
        }
        if ($object->isInitialized('fieldTypeCode') && null !== $object->getFieldTypeCode()) {
            $data['fieldTypeCode'] = $object->getFieldTypeCode();
        }
        if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
            $data['isActive'] = $object->getIsActive();
        }
        if ($object->isInitialized('isNewPersonField') && null !== $object->getIsNewPersonField()) {
            $data['isNewPersonField'] = $object->getIsNewPersonField();
        }
        if ($object->isInitialized('lineEnding') && null !== $object->getLineEnding()) {
            $data['lineEnding'] = $object->getLineEnding();
        }
        if ($object->isInitialized('secLevel') && null !== $object->getSecLevel()) {
            $data['secLevel'] = $object->getSecLevel();
        }
        if ($object->isInitialized('length') && null !== $object->getLength()) {
            $data['length'] = $object->getLength();
        }
        if ($object->isInitialized('deleteOnArchive') && null !== $object->getDeleteOnArchive()) {
            $data['deleteOnArchive'] = $object->getDeleteOnArchive();
        }
        if ($object->isInitialized('nullable') && null !== $object->getNullable()) {
            $data['nullable'] = $object->getNullable();
        }
        if ($object->isInitialized('sortKey') && null !== $object->getSortKey()) {
            $data['sortKey'] = $object->getSortKey();
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
        return array('ChurchTools\\Api2\\Model\\FieldsGetResponse200DataItem' => false);
    }
}