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
class GroupSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\GroupSettings';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\GroupSettings';
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
        $object = new \ChurchTools\Api2\Model\GroupSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('isHidden', $data)) {
            $object->setIsHidden($data['isHidden']);
            unset($data['isHidden']);
        }
        if (\array_key_exists('isOpenForMembers', $data)) {
            $object->setIsOpenForMembers($data['isOpenForMembers']);
            unset($data['isOpenForMembers']);
        }
        if (\array_key_exists('autoAccept', $data)) {
            $object->setAutoAccept($data['autoAccept']);
            unset($data['autoAccept']);
        }
        if (\array_key_exists('isPublic', $data)) {
            $object->setIsPublic($data['isPublic']);
            unset($data['isPublic']);
        }
        if (\array_key_exists('inStatistic', $data)) {
            $object->setInStatistic($data['inStatistic']);
            unset($data['inStatistic']);
        }
        if (\array_key_exists('groupMeeting', $data)) {
            $object->setGroupMeeting($this->denormalizer->denormalize($data['groupMeeting'], 'ChurchTools\\Api2\\Model\\GroupSettingsGroupMeeting', 'json', $context));
            unset($data['groupMeeting']);
        }
        if (\array_key_exists('informLeader', $data)) {
            $object->setInformLeader($data['informLeader']);
            unset($data['informLeader']);
        }
        if (\array_key_exists('newMember', $data) && $data['newMember'] !== null) {
            $object->setNewMember($this->denormalizer->denormalize($data['newMember'], 'ChurchTools\\Api2\\Model\\GroupSettingsNewMember', 'json', $context));
            unset($data['newMember']);
        }
        elseif (\array_key_exists('newMember', $data) && $data['newMember'] === null) {
            $object->setNewMember(null);
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
        if ($object->isInitialized('isHidden') && null !== $object->getIsHidden()) {
            $data['isHidden'] = $object->getIsHidden();
        }
        if ($object->isInitialized('isOpenForMembers') && null !== $object->getIsOpenForMembers()) {
            $data['isOpenForMembers'] = $object->getIsOpenForMembers();
        }
        if ($object->isInitialized('autoAccept') && null !== $object->getAutoAccept()) {
            $data['autoAccept'] = $object->getAutoAccept();
        }
        if ($object->isInitialized('isPublic') && null !== $object->getIsPublic()) {
            $data['isPublic'] = $object->getIsPublic();
        }
        if ($object->isInitialized('inStatistic') && null !== $object->getInStatistic()) {
            $data['inStatistic'] = $object->getInStatistic();
        }
        if ($object->isInitialized('groupMeeting') && null !== $object->getGroupMeeting()) {
            $data['groupMeeting'] = $this->normalizer->normalize($object->getGroupMeeting(), 'json', $context);
        }
        if ($object->isInitialized('informLeader') && null !== $object->getInformLeader()) {
            $data['informLeader'] = $object->getInformLeader();
        }
        if ($object->isInitialized('newMember') && null !== $object->getNewMember()) {
            $data['newMember'] = $this->normalizer->normalize($object->getNewMember(), 'json', $context);
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
        return array('ChurchTools\\Api2\\Model\\GroupSettings' => false);
    }
}