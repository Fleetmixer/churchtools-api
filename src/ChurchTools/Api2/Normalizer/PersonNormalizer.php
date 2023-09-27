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
class PersonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ChurchTools\\Api2\\Model\\Person';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\Person';
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
        $object = new \ChurchTools\Api2\Model\Person();
        if (\array_key_exists('latitude', $data) && \is_int($data['latitude'])) {
            $data['latitude'] = (double) $data['latitude'];
        }
        if (\array_key_exists('longitude', $data) && \is_int($data['longitude'])) {
            $data['longitude'] = (double) $data['longitude'];
        }
        if (\array_key_exists('latitudeLoose', $data) && \is_int($data['latitudeLoose'])) {
            $data['latitudeLoose'] = (double) $data['latitudeLoose'];
        }
        if (\array_key_exists('longitudeLoose', $data) && \is_int($data['longitudeLoose'])) {
            $data['longitudeLoose'] = (double) $data['longitudeLoose'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('securityLevelForPerson', $data)) {
            $object->setSecurityLevelForPerson($data['securityLevelForPerson']);
            unset($data['securityLevelForPerson']);
        }
        if (\array_key_exists('editSecurityLevelForPerson', $data)) {
            $object->setEditSecurityLevelForPerson($data['editSecurityLevelForPerson']);
            unset($data['editSecurityLevelForPerson']);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('firstName', $data) && $data['firstName'] !== null) {
            $object->setFirstName($data['firstName']);
            unset($data['firstName']);
        }
        elseif (\array_key_exists('firstName', $data) && $data['firstName'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('lastName', $data) && $data['lastName'] !== null) {
            $object->setLastName($data['lastName']);
            unset($data['lastName']);
        }
        elseif (\array_key_exists('lastName', $data) && $data['lastName'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('nickname', $data) && $data['nickname'] !== null) {
            $object->setNickname($data['nickname']);
            unset($data['nickname']);
        }
        elseif (\array_key_exists('nickname', $data) && $data['nickname'] === null) {
            $object->setNickname(null);
        }
        if (\array_key_exists('job', $data) && $data['job'] !== null) {
            $object->setJob($data['job']);
            unset($data['job']);
        }
        elseif (\array_key_exists('job', $data) && $data['job'] === null) {
            $object->setJob(null);
        }
        if (\array_key_exists('street', $data) && $data['street'] !== null) {
            $object->setStreet($data['street']);
            unset($data['street']);
        }
        elseif (\array_key_exists('street', $data) && $data['street'] === null) {
            $object->setStreet(null);
        }
        if (\array_key_exists('addressAddition', $data) && $data['addressAddition'] !== null) {
            $object->setAddressAddition($data['addressAddition']);
            unset($data['addressAddition']);
        }
        elseif (\array_key_exists('addressAddition', $data) && $data['addressAddition'] === null) {
            $object->setAddressAddition(null);
        }
        if (\array_key_exists('zip', $data) && $data['zip'] !== null) {
            $object->setZip($data['zip']);
            unset($data['zip']);
        }
        elseif (\array_key_exists('zip', $data) && $data['zip'] === null) {
            $object->setZip(null);
        }
        if (\array_key_exists('city', $data) && $data['city'] !== null) {
            $object->setCity($data['city']);
            unset($data['city']);
        }
        elseif (\array_key_exists('city', $data) && $data['city'] === null) {
            $object->setCity(null);
        }
        if (\array_key_exists('country', $data) && $data['country'] !== null) {
            $object->setCountry($data['country']);
            unset($data['country']);
        }
        elseif (\array_key_exists('country', $data) && $data['country'] === null) {
            $object->setCountry(null);
        }
        if (\array_key_exists('latitude', $data) && $data['latitude'] !== null) {
            $object->setLatitude($data['latitude']);
            unset($data['latitude']);
        }
        elseif (\array_key_exists('latitude', $data) && $data['latitude'] === null) {
            $object->setLatitude(null);
        }
        if (\array_key_exists('longitude', $data) && $data['longitude'] !== null) {
            $object->setLongitude($data['longitude']);
            unset($data['longitude']);
        }
        elseif (\array_key_exists('longitude', $data) && $data['longitude'] === null) {
            $object->setLongitude(null);
        }
        if (\array_key_exists('latitudeLoose', $data) && $data['latitudeLoose'] !== null) {
            $object->setLatitudeLoose($data['latitudeLoose']);
            unset($data['latitudeLoose']);
        }
        elseif (\array_key_exists('latitudeLoose', $data) && $data['latitudeLoose'] === null) {
            $object->setLatitudeLoose(null);
        }
        if (\array_key_exists('longitudeLoose', $data) && $data['longitudeLoose'] !== null) {
            $object->setLongitudeLoose($data['longitudeLoose']);
            unset($data['longitudeLoose']);
        }
        elseif (\array_key_exists('longitudeLoose', $data) && $data['longitudeLoose'] === null) {
            $object->setLongitudeLoose(null);
        }
        if (\array_key_exists('phonePrivate', $data) && $data['phonePrivate'] !== null) {
            $object->setPhonePrivate($data['phonePrivate']);
            unset($data['phonePrivate']);
        }
        elseif (\array_key_exists('phonePrivate', $data) && $data['phonePrivate'] === null) {
            $object->setPhonePrivate(null);
        }
        if (\array_key_exists('phoneWork', $data) && $data['phoneWork'] !== null) {
            $object->setPhoneWork($data['phoneWork']);
            unset($data['phoneWork']);
        }
        elseif (\array_key_exists('phoneWork', $data) && $data['phoneWork'] === null) {
            $object->setPhoneWork(null);
        }
        if (\array_key_exists('mobile', $data) && $data['mobile'] !== null) {
            $object->setMobile($data['mobile']);
            unset($data['mobile']);
        }
        elseif (\array_key_exists('mobile', $data) && $data['mobile'] === null) {
            $object->setMobile(null);
        }
        if (\array_key_exists('fax', $data) && $data['fax'] !== null) {
            $object->setFax($data['fax']);
            unset($data['fax']);
        }
        elseif (\array_key_exists('fax', $data) && $data['fax'] === null) {
            $object->setFax(null);
        }
        if (\array_key_exists('birthName', $data) && $data['birthName'] !== null) {
            $object->setBirthName($data['birthName']);
            unset($data['birthName']);
        }
        elseif (\array_key_exists('birthName', $data) && $data['birthName'] === null) {
            $object->setBirthName(null);
        }
        if (\array_key_exists('birthday', $data) && $data['birthday'] !== null) {
            $object->setBirthday(\DateTime::createFromFormat('Y-m-d', $data['birthday'])->setTime(0, 0, 0));
            unset($data['birthday']);
        }
        elseif (\array_key_exists('birthday', $data) && $data['birthday'] === null) {
            $object->setBirthday(null);
        }
        if (\array_key_exists('birthplace', $data) && $data['birthplace'] !== null) {
            $object->setBirthplace($data['birthplace']);
            unset($data['birthplace']);
        }
        elseif (\array_key_exists('birthplace', $data) && $data['birthplace'] === null) {
            $object->setBirthplace(null);
        }
        if (\array_key_exists('imageUrl', $data) && $data['imageUrl'] !== null) {
            $object->setImageUrl($data['imageUrl']);
            unset($data['imageUrl']);
        }
        elseif (\array_key_exists('imageUrl', $data) && $data['imageUrl'] === null) {
            $object->setImageUrl(null);
        }
        if (\array_key_exists('familyImageUrl', $data) && $data['familyImageUrl'] !== null) {
            $object->setFamilyImageUrl($data['familyImageUrl']);
            unset($data['familyImageUrl']);
        }
        elseif (\array_key_exists('familyImageUrl', $data) && $data['familyImageUrl'] === null) {
            $object->setFamilyImageUrl(null);
        }
        if (\array_key_exists('sexId', $data) && $data['sexId'] !== null) {
            $object->setSexId($data['sexId']);
            unset($data['sexId']);
        }
        elseif (\array_key_exists('sexId', $data) && $data['sexId'] === null) {
            $object->setSexId(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('cmsUserId', $data) && $data['cmsUserId'] !== null) {
            $object->setCmsUserId($data['cmsUserId']);
            unset($data['cmsUserId']);
        }
        elseif (\array_key_exists('cmsUserId', $data) && $data['cmsUserId'] === null) {
            $object->setCmsUserId(null);
        }
        if (\array_key_exists('optigemId', $data) && $data['optigemId'] !== null) {
            $object->setOptigemId($data['optigemId']);
            unset($data['optigemId']);
        }
        elseif (\array_key_exists('optigemId', $data) && $data['optigemId'] === null) {
            $object->setOptigemId(null);
        }
        if (\array_key_exists('privacyPolicyAgreement', $data)) {
            $object->setPrivacyPolicyAgreement($this->denormalizer->denormalize($data['privacyPolicyAgreement'], 'ChurchTools\\Api2\\Model\\PersonPrivacyPolicyAgreement', 'json', $context));
            unset($data['privacyPolicyAgreement']);
        }
        if (\array_key_exists('nationalityId', $data) && $data['nationalityId'] !== null) {
            $object->setNationalityId($data['nationalityId']);
            unset($data['nationalityId']);
        }
        elseif (\array_key_exists('nationalityId', $data) && $data['nationalityId'] === null) {
            $object->setNationalityId(null);
        }
        if (\array_key_exists('familyStatusId', $data) && $data['familyStatusId'] !== null) {
            $object->setFamilyStatusId($data['familyStatusId']);
            unset($data['familyStatusId']);
        }
        elseif (\array_key_exists('familyStatusId', $data) && $data['familyStatusId'] === null) {
            $object->setFamilyStatusId(null);
        }
        if (\array_key_exists('weddingDate', $data) && $data['weddingDate'] !== null) {
            $object->setWeddingDate(\DateTime::createFromFormat('Y-m-d', $data['weddingDate'])->setTime(0, 0, 0));
            unset($data['weddingDate']);
        }
        elseif (\array_key_exists('weddingDate', $data) && $data['weddingDate'] === null) {
            $object->setWeddingDate(null);
        }
        if (\array_key_exists('campusId', $data)) {
            $object->setCampusId($data['campusId']);
            unset($data['campusId']);
        }
        if (\array_key_exists('statusId', $data)) {
            $object->setStatusId($data['statusId']);
            unset($data['statusId']);
        }
        if (\array_key_exists('firstContact', $data) && $data['firstContact'] !== null) {
            $object->setFirstContact(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['firstContact']));
            unset($data['firstContact']);
        }
        elseif (\array_key_exists('firstContact', $data) && $data['firstContact'] === null) {
            $object->setFirstContact(null);
        }
        if (\array_key_exists('dateOfBelonging', $data) && $data['dateOfBelonging'] !== null) {
            $object->setDateOfBelonging(\DateTime::createFromFormat('Y-m-d', $data['dateOfBelonging'])->setTime(0, 0, 0));
            unset($data['dateOfBelonging']);
        }
        elseif (\array_key_exists('dateOfBelonging', $data) && $data['dateOfBelonging'] === null) {
            $object->setDateOfBelonging(null);
        }
        if (\array_key_exists('dateOfEntry', $data) && $data['dateOfEntry'] !== null) {
            $object->setDateOfEntry(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateOfEntry']));
            unset($data['dateOfEntry']);
        }
        elseif (\array_key_exists('dateOfEntry', $data) && $data['dateOfEntry'] === null) {
            $object->setDateOfEntry(null);
        }
        if (\array_key_exists('dateOfResign', $data) && $data['dateOfResign'] !== null) {
            $object->setDateOfResign(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateOfResign']));
            unset($data['dateOfResign']);
        }
        elseif (\array_key_exists('dateOfResign', $data) && $data['dateOfResign'] === null) {
            $object->setDateOfResign(null);
        }
        if (\array_key_exists('dateOfBaptism', $data) && $data['dateOfBaptism'] !== null) {
            $object->setDateOfBaptism(\DateTime::createFromFormat('Y-m-d', $data['dateOfBaptism'])->setTime(0, 0, 0));
            unset($data['dateOfBaptism']);
        }
        elseif (\array_key_exists('dateOfBaptism', $data) && $data['dateOfBaptism'] === null) {
            $object->setDateOfBaptism(null);
        }
        if (\array_key_exists('placeOfBaptism', $data) && $data['placeOfBaptism'] !== null) {
            $object->setPlaceOfBaptism($data['placeOfBaptism']);
            unset($data['placeOfBaptism']);
        }
        elseif (\array_key_exists('placeOfBaptism', $data) && $data['placeOfBaptism'] === null) {
            $object->setPlaceOfBaptism(null);
        }
        if (\array_key_exists('baptisedBy', $data) && $data['baptisedBy'] !== null) {
            $object->setBaptisedBy($data['baptisedBy']);
            unset($data['baptisedBy']);
        }
        elseif (\array_key_exists('baptisedBy', $data) && $data['baptisedBy'] === null) {
            $object->setBaptisedBy(null);
        }
        if (\array_key_exists('referredBy', $data) && $data['referredBy'] !== null) {
            $object->setReferredBy($data['referredBy']);
            unset($data['referredBy']);
        }
        elseif (\array_key_exists('referredBy', $data) && $data['referredBy'] === null) {
            $object->setReferredBy(null);
        }
        if (\array_key_exists('referredTo', $data) && $data['referredTo'] !== null) {
            $object->setReferredTo($data['referredTo']);
            unset($data['referredTo']);
        }
        elseif (\array_key_exists('referredTo', $data) && $data['referredTo'] === null) {
            $object->setReferredTo(null);
        }
        if (\array_key_exists('growPathId', $data) && $data['growPathId'] !== null) {
            $object->setGrowPathId($data['growPathId']);
            unset($data['growPathId']);
        }
        elseif (\array_key_exists('growPathId', $data) && $data['growPathId'] === null) {
            $object->setGrowPathId(null);
        }
        if (\array_key_exists('isArchived', $data)) {
            $object->setIsArchived($data['isArchived']);
            unset($data['isArchived']);
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
        if ($object->isInitialized('securityLevelForPerson') && null !== $object->getSecurityLevelForPerson()) {
            $data['securityLevelForPerson'] = $object->getSecurityLevelForPerson();
        }
        if ($object->isInitialized('editSecurityLevelForPerson') && null !== $object->getEditSecurityLevelForPerson()) {
            $data['editSecurityLevelForPerson'] = $object->getEditSecurityLevelForPerson();
        }
        if ($object->isInitialized('title') && null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
            $data['firstName'] = $object->getFirstName();
        }
        if ($object->isInitialized('lastName') && null !== $object->getLastName()) {
            $data['lastName'] = $object->getLastName();
        }
        if ($object->isInitialized('nickname') && null !== $object->getNickname()) {
            $data['nickname'] = $object->getNickname();
        }
        if ($object->isInitialized('job') && null !== $object->getJob()) {
            $data['job'] = $object->getJob();
        }
        if ($object->isInitialized('street') && null !== $object->getStreet()) {
            $data['street'] = $object->getStreet();
        }
        if ($object->isInitialized('addressAddition') && null !== $object->getAddressAddition()) {
            $data['addressAddition'] = $object->getAddressAddition();
        }
        if ($object->isInitialized('zip') && null !== $object->getZip()) {
            $data['zip'] = $object->getZip();
        }
        if ($object->isInitialized('city') && null !== $object->getCity()) {
            $data['city'] = $object->getCity();
        }
        if ($object->isInitialized('country') && null !== $object->getCountry()) {
            $data['country'] = $object->getCountry();
        }
        if ($object->isInitialized('latitude') && null !== $object->getLatitude()) {
            $data['latitude'] = $object->getLatitude();
        }
        if ($object->isInitialized('longitude') && null !== $object->getLongitude()) {
            $data['longitude'] = $object->getLongitude();
        }
        if ($object->isInitialized('latitudeLoose') && null !== $object->getLatitudeLoose()) {
            $data['latitudeLoose'] = $object->getLatitudeLoose();
        }
        if ($object->isInitialized('longitudeLoose') && null !== $object->getLongitudeLoose()) {
            $data['longitudeLoose'] = $object->getLongitudeLoose();
        }
        if ($object->isInitialized('phonePrivate') && null !== $object->getPhonePrivate()) {
            $data['phonePrivate'] = $object->getPhonePrivate();
        }
        if ($object->isInitialized('phoneWork') && null !== $object->getPhoneWork()) {
            $data['phoneWork'] = $object->getPhoneWork();
        }
        if ($object->isInitialized('mobile') && null !== $object->getMobile()) {
            $data['mobile'] = $object->getMobile();
        }
        if ($object->isInitialized('fax') && null !== $object->getFax()) {
            $data['fax'] = $object->getFax();
        }
        if ($object->isInitialized('birthName') && null !== $object->getBirthName()) {
            $data['birthName'] = $object->getBirthName();
        }
        if ($object->isInitialized('birthday') && null !== $object->getBirthday()) {
            $data['birthday'] = $object->getBirthday()->format('Y-m-d');
        }
        if ($object->isInitialized('birthplace') && null !== $object->getBirthplace()) {
            $data['birthplace'] = $object->getBirthplace();
        }
        if ($object->isInitialized('imageUrl') && null !== $object->getImageUrl()) {
            $data['imageUrl'] = $object->getImageUrl();
        }
        if ($object->isInitialized('familyImageUrl') && null !== $object->getFamilyImageUrl()) {
            $data['familyImageUrl'] = $object->getFamilyImageUrl();
        }
        if ($object->isInitialized('sexId') && null !== $object->getSexId()) {
            $data['sexId'] = $object->getSexId();
        }
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('cmsUserId') && null !== $object->getCmsUserId()) {
            $data['cmsUserId'] = $object->getCmsUserId();
        }
        if ($object->isInitialized('optigemId') && null !== $object->getOptigemId()) {
            $data['optigemId'] = $object->getOptigemId();
        }
        if ($object->isInitialized('privacyPolicyAgreement') && null !== $object->getPrivacyPolicyAgreement()) {
            $data['privacyPolicyAgreement'] = $this->normalizer->normalize($object->getPrivacyPolicyAgreement(), 'json', $context);
        }
        if ($object->isInitialized('nationalityId') && null !== $object->getNationalityId()) {
            $data['nationalityId'] = $object->getNationalityId();
        }
        if ($object->isInitialized('familyStatusId') && null !== $object->getFamilyStatusId()) {
            $data['familyStatusId'] = $object->getFamilyStatusId();
        }
        if ($object->isInitialized('weddingDate') && null !== $object->getWeddingDate()) {
            $data['weddingDate'] = $object->getWeddingDate()->format('Y-m-d');
        }
        if ($object->isInitialized('campusId') && null !== $object->getCampusId()) {
            $data['campusId'] = $object->getCampusId();
        }
        if ($object->isInitialized('statusId') && null !== $object->getStatusId()) {
            $data['statusId'] = $object->getStatusId();
        }
        if ($object->isInitialized('firstContact') && null !== $object->getFirstContact()) {
            $data['firstContact'] = $object->getFirstContact()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('dateOfBelonging') && null !== $object->getDateOfBelonging()) {
            $data['dateOfBelonging'] = $object->getDateOfBelonging()->format('Y-m-d');
        }
        if ($object->isInitialized('dateOfEntry') && null !== $object->getDateOfEntry()) {
            $data['dateOfEntry'] = $object->getDateOfEntry()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('dateOfResign') && null !== $object->getDateOfResign()) {
            $data['dateOfResign'] = $object->getDateOfResign()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('dateOfBaptism') && null !== $object->getDateOfBaptism()) {
            $data['dateOfBaptism'] = $object->getDateOfBaptism()->format('Y-m-d');
        }
        if ($object->isInitialized('placeOfBaptism') && null !== $object->getPlaceOfBaptism()) {
            $data['placeOfBaptism'] = $object->getPlaceOfBaptism();
        }
        if ($object->isInitialized('baptisedBy') && null !== $object->getBaptisedBy()) {
            $data['baptisedBy'] = $object->getBaptisedBy();
        }
        if ($object->isInitialized('referredBy') && null !== $object->getReferredBy()) {
            $data['referredBy'] = $object->getReferredBy();
        }
        if ($object->isInitialized('referredTo') && null !== $object->getReferredTo()) {
            $data['referredTo'] = $object->getReferredTo();
        }
        if ($object->isInitialized('growPathId') && null !== $object->getGrowPathId()) {
            $data['growPathId'] = $object->getGrowPathId();
        }
        if ($object->isInitialized('isArchived') && null !== $object->getIsArchived()) {
            $data['isArchived'] = $object->getIsArchived();
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
        return array('ChurchTools\\Api2\\Model\\Person' => false);
    }
}