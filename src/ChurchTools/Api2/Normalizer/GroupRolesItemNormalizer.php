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
class GroupRolesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\GroupRolesItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\GroupRolesItem';
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
        $object = new \ChurchTools\Api2\Model\GroupRolesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('groupTypeRoleId', $data)) {
            $object->setGroupTypeRoleId($data['groupTypeRoleId']);
            unset($data['groupTypeRoleId']);
        }
        if (\array_key_exists('groupTypeId', $data)) {
            $object->setGroupTypeId($data['groupTypeId']);
            unset($data['groupTypeId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('shorty', $data)) {
            $object->setShorty($data['shorty']);
            unset($data['shorty']);
        }
        if (\array_key_exists('sortKey', $data)) {
            $object->setSortKey($data['sortKey']);
            unset($data['sortKey']);
        }
        if (\array_key_exists('toDelete', $data)) {
            $object->setToDelete($data['toDelete']);
            unset($data['toDelete']);
        }
        if (\array_key_exists('hasRequested', $data)) {
            $object->setHasRequested($data['hasRequested']);
            unset($data['hasRequested']);
        }
        if (\array_key_exists('isLeader', $data)) {
            $object->setIsLeader($data['isLeader']);
            unset($data['isLeader']);
        }
        if (\array_key_exists('isDefault', $data)) {
            $object->setIsDefault($data['isDefault']);
            unset($data['isDefault']);
        }
        if (\array_key_exists('isHidden', $data)) {
            $object->setIsHidden($data['isHidden']);
            unset($data['isHidden']);
        }
        if (\array_key_exists('growPathId', $data) && $data['growPathId'] !== null) {
            $object->setGrowPathId($data['growPathId']);
            unset($data['growPathId']);
        }
        elseif (\array_key_exists('growPathId', $data) && $data['growPathId'] === null) {
            $object->setGrowPathId(null);
        }
        if (\array_key_exists('forceTwoFactorAuth', $data)) {
            $object->setForceTwoFactorAuth($data['forceTwoFactorAuth']);
            unset($data['forceTwoFactorAuth']);
        }
        if (\array_key_exists('isActive', $data)) {
            $object->setIsActive($data['isActive']);
            unset($data['isActive']);
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
        if ($object->isInitialized('groupTypeRoleId') && null !== $object->getGroupTypeRoleId()) {
            $data['groupTypeRoleId'] = $object->getGroupTypeRoleId();
        }
        if ($object->isInitialized('groupTypeId') && null !== $object->getGroupTypeId()) {
            $data['groupTypeId'] = $object->getGroupTypeId();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('shorty') && null !== $object->getShorty()) {
            $data['shorty'] = $object->getShorty();
        }
        if ($object->isInitialized('sortKey') && null !== $object->getSortKey()) {
            $data['sortKey'] = $object->getSortKey();
        }
        if ($object->isInitialized('toDelete') && null !== $object->getToDelete()) {
            $data['toDelete'] = $object->getToDelete();
        }
        if ($object->isInitialized('hasRequested') && null !== $object->getHasRequested()) {
            $data['hasRequested'] = $object->getHasRequested();
        }
        if ($object->isInitialized('isLeader') && null !== $object->getIsLeader()) {
            $data['isLeader'] = $object->getIsLeader();
        }
        if ($object->isInitialized('isDefault') && null !== $object->getIsDefault()) {
            $data['isDefault'] = $object->getIsDefault();
        }
        if ($object->isInitialized('isHidden') && null !== $object->getIsHidden()) {
            $data['isHidden'] = $object->getIsHidden();
        }
        if ($object->isInitialized('growPathId') && null !== $object->getGrowPathId()) {
            $data['growPathId'] = $object->getGrowPathId();
        }
        if ($object->isInitialized('forceTwoFactorAuth') && null !== $object->getForceTwoFactorAuth()) {
            $data['forceTwoFactorAuth'] = $object->getForceTwoFactorAuth();
        }
        if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
            $data['isActive'] = $object->getIsActive();
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
        return array('ChurchTools\\Api2\\Model\\GroupRolesItem' => false);
    }
}