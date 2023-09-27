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
class GroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\Group';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\Group';
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
        $object = new \ChurchTools\Api2\Model\Group();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('securityLevelForGroup', $data)) {
            $object->setSecurityLevelForGroup($data['securityLevelForGroup']);
            unset($data['securityLevelForGroup']);
        }
        if (\array_key_exists('information', $data)) {
            $object->setInformation($this->denormalizer->denormalize($data['information'], 'ChurchTools\\Api2\\Model\\GroupInformation', 'json', $context));
            unset($data['information']);
        }
        if (\array_key_exists('settings', $data)) {
            $object->setSettings($this->denormalizer->denormalize($data['settings'], 'ChurchTools\\Api2\\Model\\GroupSettings', 'json', $context));
            unset($data['settings']);
        }
        if (\array_key_exists('followUp', $data)) {
            $object->setFollowUp($this->denormalizer->denormalize($data['followUp'], 'ChurchTools\\Api2\\Model\\GroupFollowUp', 'json', $context));
            unset($data['followUp']);
        }
        if (\array_key_exists('roles', $data)) {
            $values = array();
            foreach ($data['roles'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ChurchTools\\Api2\\Model\\GroupRolesItem', 'json', $context);
            }
            $object->setRoles($values);
            unset($data['roles']);
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
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('securityLevelForGroup') && null !== $object->getSecurityLevelForGroup()) {
            $data['securityLevelForGroup'] = $object->getSecurityLevelForGroup();
        }
        if ($object->isInitialized('information') && null !== $object->getInformation()) {
            $data['information'] = $this->normalizer->normalize($object->getInformation(), 'json', $context);
        }
        if ($object->isInitialized('settings') && null !== $object->getSettings()) {
            $data['settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
        }
        if ($object->isInitialized('followUp') && null !== $object->getFollowUp()) {
            $data['followUp'] = $this->normalizer->normalize($object->getFollowUp(), 'json', $context);
        }
        if ($object->isInitialized('roles') && null !== $object->getRoles()) {
            $values = array();
            foreach ($object->getRoles() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['roles'] = $values;
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
        return array('ChurchTools\\Api2\\Model\\Group' => false);
    }
}