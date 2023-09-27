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
class GroupMemberNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\GroupMember';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\GroupMember';
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
        $object = new \ChurchTools\Api2\Model\GroupMember();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('personId', $data)) {
            $object->setPersonId($data['personId']);
            unset($data['personId']);
        }
        if (\array_key_exists('roleId', $data)) {
            $object->setRoleId($data['roleId']);
            unset($data['roleId']);
        }
        if (\array_key_exists('comment', $data)) {
            $object->setComment($data['comment']);
            unset($data['comment']);
        }
        if (\array_key_exists('memberStartDate', $data)) {
            $object->setMemberStartDate(\DateTime::createFromFormat('Y-m-d', $data['memberStartDate'])->setTime(0, 0, 0));
            unset($data['memberStartDate']);
        }
        if (\array_key_exists('memberEndDate', $data) && $data['memberEndDate'] !== null) {
            $object->setMemberEndDate(\DateTime::createFromFormat('Y-m-d', $data['memberEndDate'])->setTime(0, 0, 0));
            unset($data['memberEndDate']);
        }
        elseif (\array_key_exists('memberEndDate', $data) && $data['memberEndDate'] === null) {
            $object->setMemberEndDate(null);
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
        if ($object->isInitialized('personId') && null !== $object->getPersonId()) {
            $data['personId'] = $object->getPersonId();
        }
        if ($object->isInitialized('roleId') && null !== $object->getRoleId()) {
            $data['roleId'] = $object->getRoleId();
        }
        if ($object->isInitialized('comment') && null !== $object->getComment()) {
            $data['comment'] = $object->getComment();
        }
        if ($object->isInitialized('memberStartDate') && null !== $object->getMemberStartDate()) {
            $data['memberStartDate'] = $object->getMemberStartDate()->format('Y-m-d');
        }
        if ($object->isInitialized('memberEndDate') && null !== $object->getMemberEndDate()) {
            $data['memberEndDate'] = $object->getMemberEndDate()->format('Y-m-d');
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
        return array('ChurchTools\\Api2\\Model\\GroupMember' => false);
    }
}