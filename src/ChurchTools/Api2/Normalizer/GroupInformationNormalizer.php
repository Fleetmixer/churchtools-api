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
class GroupInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\GroupInformation';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\GroupInformation';
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
        $object = new \ChurchTools\Api2\Model\GroupInformation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('imageUrl', $data) && $data['imageUrl'] !== null) {
            $object->setImageUrl($data['imageUrl']);
            unset($data['imageUrl']);
        }
        elseif (\array_key_exists('imageUrl', $data) && $data['imageUrl'] === null) {
            $object->setImageUrl(null);
        }
        if (\array_key_exists('dateOfFoundation', $data) && $data['dateOfFoundation'] !== null) {
            $object->setDateOfFoundation(\DateTime::createFromFormat('Y-m-d', $data['dateOfFoundation'])->setTime(0, 0, 0));
            unset($data['dateOfFoundation']);
        }
        elseif (\array_key_exists('dateOfFoundation', $data) && $data['dateOfFoundation'] === null) {
            $object->setDateOfFoundation(null);
        }
        if (\array_key_exists('endDate', $data) && $data['endDate'] !== null) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['endDate'])->setTime(0, 0, 0));
            unset($data['endDate']);
        }
        elseif (\array_key_exists('endDate', $data) && $data['endDate'] === null) {
            $object->setEndDate(null);
        }
        if (\array_key_exists('meetingTime', $data) && $data['meetingTime'] !== null) {
            $object->setMeetingTime($data['meetingTime']);
            unset($data['meetingTime']);
        }
        elseif (\array_key_exists('meetingTime', $data) && $data['meetingTime'] === null) {
            $object->setMeetingTime(null);
        }
        if (\array_key_exists('weekday', $data) && $data['weekday'] !== null) {
            $object->setWeekday($data['weekday']);
            unset($data['weekday']);
        }
        elseif (\array_key_exists('weekday', $data) && $data['weekday'] === null) {
            $object->setWeekday(null);
        }
        if (\array_key_exists('groupCategoryId', $data) && $data['groupCategoryId'] !== null) {
            $object->setGroupCategoryId($data['groupCategoryId']);
            unset($data['groupCategoryId']);
        }
        elseif (\array_key_exists('groupCategoryId', $data) && $data['groupCategoryId'] === null) {
            $object->setGroupCategoryId(null);
        }
        if (\array_key_exists('ageGroups', $data)) {
            $values = array();
            foreach ($data['ageGroups'] as $value) {
                $values[] = $value;
            }
            $object->setAgeGroups($values);
            unset($data['ageGroups']);
        }
        if (\array_key_exists('targetGroupId', $data) && $data['targetGroupId'] !== null) {
            $object->setTargetGroupId($data['targetGroupId']);
            unset($data['targetGroupId']);
        }
        elseif (\array_key_exists('targetGroupId', $data) && $data['targetGroupId'] === null) {
            $object->setTargetGroupId(null);
        }
        if (\array_key_exists('maxMembers', $data) && $data['maxMembers'] !== null) {
            $object->setMaxMembers($data['maxMembers']);
            unset($data['maxMembers']);
        }
        elseif (\array_key_exists('maxMembers', $data) && $data['maxMembers'] === null) {
            $object->setMaxMembers(null);
        }
        if (\array_key_exists('groupTypeId', $data)) {
            $object->setGroupTypeId($data['groupTypeId']);
            unset($data['groupTypeId']);
        }
        if (\array_key_exists('groupStatusId', $data)) {
            $object->setGroupStatusId($data['groupStatusId']);
            unset($data['groupStatusId']);
        }
        if (\array_key_exists('note', $data)) {
            $object->setNote($data['note']);
            unset($data['note']);
        }
        if (\array_key_exists('campusId', $data) && $data['campusId'] !== null) {
            $object->setCampusId($data['campusId']);
            unset($data['campusId']);
        }
        elseif (\array_key_exists('campusId', $data) && $data['campusId'] === null) {
            $object->setCampusId(null);
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
        if ($object->isInitialized('imageUrl') && null !== $object->getImageUrl()) {
            $data['imageUrl'] = $object->getImageUrl();
        }
        if ($object->isInitialized('dateOfFoundation') && null !== $object->getDateOfFoundation()) {
            $data['dateOfFoundation'] = $object->getDateOfFoundation()->format('Y-m-d');
        }
        if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
            $data['endDate'] = $object->getEndDate()->format('Y-m-d');
        }
        if ($object->isInitialized('meetingTime') && null !== $object->getMeetingTime()) {
            $data['meetingTime'] = $object->getMeetingTime();
        }
        if ($object->isInitialized('weekday') && null !== $object->getWeekday()) {
            $data['weekday'] = $object->getWeekday();
        }
        if ($object->isInitialized('groupCategoryId') && null !== $object->getGroupCategoryId()) {
            $data['groupCategoryId'] = $object->getGroupCategoryId();
        }
        if ($object->isInitialized('ageGroups') && null !== $object->getAgeGroups()) {
            $values = array();
            foreach ($object->getAgeGroups() as $value) {
                $values[] = $value;
            }
            $data['ageGroups'] = $values;
        }
        if ($object->isInitialized('targetGroupId') && null !== $object->getTargetGroupId()) {
            $data['targetGroupId'] = $object->getTargetGroupId();
        }
        if ($object->isInitialized('maxMembers') && null !== $object->getMaxMembers()) {
            $data['maxMembers'] = $object->getMaxMembers();
        }
        if ($object->isInitialized('groupTypeId') && null !== $object->getGroupTypeId()) {
            $data['groupTypeId'] = $object->getGroupTypeId();
        }
        if ($object->isInitialized('groupStatusId') && null !== $object->getGroupStatusId()) {
            $data['groupStatusId'] = $object->getGroupStatusId();
        }
        if ($object->isInitialized('note') && null !== $object->getNote()) {
            $data['note'] = $object->getNote();
        }
        if ($object->isInitialized('campusId') && null !== $object->getCampusId()) {
            $data['campusId'] = $object->getCampusId();
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
        return array('ChurchTools\\Api2\\Model\\GroupInformation' => false);
    }
}