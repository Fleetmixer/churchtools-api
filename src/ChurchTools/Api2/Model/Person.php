<?php

namespace ChurchTools\Api2\Model;

class Person extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * Security level of the current user. The user sees fields upto this level.
     *
     * @var int
     */
    protected $securityLevelForPerson;
    /**
     * Eidt security level of the current user. The user can edit fields upto this level.
     *
     * @var int
     */
    protected $editSecurityLevelForPerson;
    /**
     * 
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * 
     *
     * @var string|null
     */
    protected $nickname;
    /**
     * 
     *
     * @var string|null
     */
    protected $job;
    /**
     * 
     *
     * @var string|null
     */
    protected $street;
    /**
     * 
     *
     * @var string|null
     */
    protected $addressAddition;
    /**
     * 
     *
     * @var string|null
     */
    protected $zip;
    /**
     * 
     *
     * @var string|null
     */
    protected $city;
    /**
     * 
     *
     * @var string|null
     */
    protected $country;
    /**
     * 
     *
     * @var float|null
     */
    protected $latitude;
    /**
     * 
     *
     * @var float|null
     */
    protected $longitude;
    /**
     * 
     *
     * @var float|null
     */
    protected $latitudeLoose;
    /**
     * 
     *
     * @var float|null
     */
    protected $longitudeLoose;
    /**
     * 
     *
     * @var string|null
     */
    protected $phonePrivate;
    /**
     * 
     *
     * @var string|null
     */
    protected $phoneWork;
    /**
     * 
     *
     * @var string|null
     */
    protected $mobile;
    /**
     * 
     *
     * @var string|null
     */
    protected $fax;
    /**
     * 
     *
     * @var string|null
     */
    protected $birthName;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $birthday;
    /**
     * 
     *
     * @var string|null
     */
    protected $birthplace;
    /**
     * 
     *
     * @var string|null
     */
    protected $imageUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $familyImageUrl;
    /**
     * 
     *
     * @var int|null
     */
    protected $sexId;
    /**
     * 
     *
     * @var string|null
     */
    protected $email;
    /**
     * 
     *
     * @var string|null
     */
    protected $cmsUserId;
    /**
     * 
     *
     * @var int|null
     */
    protected $optigemId;
    /**
     * 
     *
     * @var PersonPrivacyPolicyAgreement
     */
    protected $privacyPolicyAgreement;
    /**
     * 
     *
     * @var int|null
     */
    protected $nationalityId;
    /**
     * 
     *
     * @var int|null
     */
    protected $familyStatusId;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $weddingDate;
    /**
     * 
     *
     * @var int
     */
    protected $campusId;
    /**
     * 
     *
     * @var int
     */
    protected $statusId;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $firstContact;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $dateOfBelonging;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $dateOfEntry;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $dateOfResign;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $dateOfBaptism;
    /**
     * 
     *
     * @var string|null
     */
    protected $placeOfBaptism;
    /**
     * 
     *
     * @var string|null
     */
    protected $baptisedBy;
    /**
     * 
     *
     * @var string|null
     */
    protected $referredBy;
    /**
     * 
     *
     * @var string|null
     */
    protected $referredTo;
    /**
     * 
     *
     * @var int|null
     */
    protected $growPathId;
    /**
     * 
     *
     * @var bool
     */
    protected $isArchived;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Security level of the current user. The user sees fields upto this level.
     *
     * @return int
     */
    public function getSecurityLevelForPerson() : int
    {
        return $this->securityLevelForPerson;
    }
    /**
     * Security level of the current user. The user sees fields upto this level.
     *
     * @param int $securityLevelForPerson
     *
     * @return self
     */
    public function setSecurityLevelForPerson(int $securityLevelForPerson) : self
    {
        $this->initialized['securityLevelForPerson'] = true;
        $this->securityLevelForPerson = $securityLevelForPerson;
        return $this;
    }
    /**
     * Eidt security level of the current user. The user can edit fields upto this level.
     *
     * @return int
     */
    public function getEditSecurityLevelForPerson() : int
    {
        return $this->editSecurityLevelForPerson;
    }
    /**
     * Eidt security level of the current user. The user can edit fields upto this level.
     *
     * @param int $editSecurityLevelForPerson
     *
     * @return self
     */
    public function setEditSecurityLevelForPerson(int $editSecurityLevelForPerson) : self
    {
        $this->initialized['editSecurityLevelForPerson'] = true;
        $this->editSecurityLevelForPerson = $editSecurityLevelForPerson;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFirstName() : ?string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName) : self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastName() : ?string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName) : self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNickname() : ?string
    {
        return $this->nickname;
    }
    /**
     * 
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setNickname(?string $nickname) : self
    {
        $this->initialized['nickname'] = true;
        $this->nickname = $nickname;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getJob() : ?string
    {
        return $this->job;
    }
    /**
     * 
     *
     * @param string|null $job
     *
     * @return self
     */
    public function setJob(?string $job) : self
    {
        $this->initialized['job'] = true;
        $this->job = $job;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStreet() : ?string
    {
        return $this->street;
    }
    /**
     * 
     *
     * @param string|null $street
     *
     * @return self
     */
    public function setStreet(?string $street) : self
    {
        $this->initialized['street'] = true;
        $this->street = $street;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAddressAddition() : ?string
    {
        return $this->addressAddition;
    }
    /**
     * 
     *
     * @param string|null $addressAddition
     *
     * @return self
     */
    public function setAddressAddition(?string $addressAddition) : self
    {
        $this->initialized['addressAddition'] = true;
        $this->addressAddition = $addressAddition;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getZip() : ?string
    {
        return $this->zip;
    }
    /**
     * 
     *
     * @param string|null $zip
     *
     * @return self
     */
    public function setZip(?string $zip) : self
    {
        $this->initialized['zip'] = true;
        $this->zip = $zip;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * 
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city) : self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCountry() : ?string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string|null $country
     *
     * @return self
     */
    public function setCountry(?string $country) : self
    {
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLatitude() : ?float
    {
        return $this->latitude;
    }
    /**
     * 
     *
     * @param float|null $latitude
     *
     * @return self
     */
    public function setLatitude(?float $latitude) : self
    {
        $this->initialized['latitude'] = true;
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLongitude() : ?float
    {
        return $this->longitude;
    }
    /**
     * 
     *
     * @param float|null $longitude
     *
     * @return self
     */
    public function setLongitude(?float $longitude) : self
    {
        $this->initialized['longitude'] = true;
        $this->longitude = $longitude;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLatitudeLoose() : ?float
    {
        return $this->latitudeLoose;
    }
    /**
     * 
     *
     * @param float|null $latitudeLoose
     *
     * @return self
     */
    public function setLatitudeLoose(?float $latitudeLoose) : self
    {
        $this->initialized['latitudeLoose'] = true;
        $this->latitudeLoose = $latitudeLoose;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLongitudeLoose() : ?float
    {
        return $this->longitudeLoose;
    }
    /**
     * 
     *
     * @param float|null $longitudeLoose
     *
     * @return self
     */
    public function setLongitudeLoose(?float $longitudeLoose) : self
    {
        $this->initialized['longitudeLoose'] = true;
        $this->longitudeLoose = $longitudeLoose;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPhonePrivate() : ?string
    {
        return $this->phonePrivate;
    }
    /**
     * 
     *
     * @param string|null $phonePrivate
     *
     * @return self
     */
    public function setPhonePrivate(?string $phonePrivate) : self
    {
        $this->initialized['phonePrivate'] = true;
        $this->phonePrivate = $phonePrivate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPhoneWork() : ?string
    {
        return $this->phoneWork;
    }
    /**
     * 
     *
     * @param string|null $phoneWork
     *
     * @return self
     */
    public function setPhoneWork(?string $phoneWork) : self
    {
        $this->initialized['phoneWork'] = true;
        $this->phoneWork = $phoneWork;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMobile() : ?string
    {
        return $this->mobile;
    }
    /**
     * 
     *
     * @param string|null $mobile
     *
     * @return self
     */
    public function setMobile(?string $mobile) : self
    {
        $this->initialized['mobile'] = true;
        $this->mobile = $mobile;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFax() : ?string
    {
        return $this->fax;
    }
    /**
     * 
     *
     * @param string|null $fax
     *
     * @return self
     */
    public function setFax(?string $fax) : self
    {
        $this->initialized['fax'] = true;
        $this->fax = $fax;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBirthName() : ?string
    {
        return $this->birthName;
    }
    /**
     * 
     *
     * @param string|null $birthName
     *
     * @return self
     */
    public function setBirthName(?string $birthName) : self
    {
        $this->initialized['birthName'] = true;
        $this->birthName = $birthName;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getBirthday() : ?\DateTime
    {
        return $this->birthday;
    }
    /**
     * 
     *
     * @param \DateTime|null $birthday
     *
     * @return self
     */
    public function setBirthday(?\DateTime $birthday) : self
    {
        $this->initialized['birthday'] = true;
        $this->birthday = $birthday;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBirthplace() : ?string
    {
        return $this->birthplace;
    }
    /**
     * 
     *
     * @param string|null $birthplace
     *
     * @return self
     */
    public function setBirthplace(?string $birthplace) : self
    {
        $this->initialized['birthplace'] = true;
        $this->birthplace = $birthplace;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getImageUrl() : ?string
    {
        return $this->imageUrl;
    }
    /**
     * 
     *
     * @param string|null $imageUrl
     *
     * @return self
     */
    public function setImageUrl(?string $imageUrl) : self
    {
        $this->initialized['imageUrl'] = true;
        $this->imageUrl = $imageUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFamilyImageUrl() : ?string
    {
        return $this->familyImageUrl;
    }
    /**
     * 
     *
     * @param string|null $familyImageUrl
     *
     * @return self
     */
    public function setFamilyImageUrl(?string $familyImageUrl) : self
    {
        $this->initialized['familyImageUrl'] = true;
        $this->familyImageUrl = $familyImageUrl;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSexId() : ?int
    {
        return $this->sexId;
    }
    /**
     * 
     *
     * @param int|null $sexId
     *
     * @return self
     */
    public function setSexId(?int $sexId) : self
    {
        $this->initialized['sexId'] = true;
        $this->sexId = $sexId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCmsUserId() : ?string
    {
        return $this->cmsUserId;
    }
    /**
     * 
     *
     * @param string|null $cmsUserId
     *
     * @return self
     */
    public function setCmsUserId(?string $cmsUserId) : self
    {
        $this->initialized['cmsUserId'] = true;
        $this->cmsUserId = $cmsUserId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOptigemId() : ?int
    {
        return $this->optigemId;
    }
    /**
     * 
     *
     * @param int|null $optigemId
     *
     * @return self
     */
    public function setOptigemId(?int $optigemId) : self
    {
        $this->initialized['optigemId'] = true;
        $this->optigemId = $optigemId;
        return $this;
    }
    /**
     * 
     *
     * @return PersonPrivacyPolicyAgreement
     */
    public function getPrivacyPolicyAgreement() : PersonPrivacyPolicyAgreement
    {
        return $this->privacyPolicyAgreement;
    }
    /**
     * 
     *
     * @param PersonPrivacyPolicyAgreement $privacyPolicyAgreement
     *
     * @return self
     */
    public function setPrivacyPolicyAgreement(PersonPrivacyPolicyAgreement $privacyPolicyAgreement) : self
    {
        $this->initialized['privacyPolicyAgreement'] = true;
        $this->privacyPolicyAgreement = $privacyPolicyAgreement;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNationalityId() : ?int
    {
        return $this->nationalityId;
    }
    /**
     * 
     *
     * @param int|null $nationalityId
     *
     * @return self
     */
    public function setNationalityId(?int $nationalityId) : self
    {
        $this->initialized['nationalityId'] = true;
        $this->nationalityId = $nationalityId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFamilyStatusId() : ?int
    {
        return $this->familyStatusId;
    }
    /**
     * 
     *
     * @param int|null $familyStatusId
     *
     * @return self
     */
    public function setFamilyStatusId(?int $familyStatusId) : self
    {
        $this->initialized['familyStatusId'] = true;
        $this->familyStatusId = $familyStatusId;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getWeddingDate() : ?\DateTime
    {
        return $this->weddingDate;
    }
    /**
     * 
     *
     * @param \DateTime|null $weddingDate
     *
     * @return self
     */
    public function setWeddingDate(?\DateTime $weddingDate) : self
    {
        $this->initialized['weddingDate'] = true;
        $this->weddingDate = $weddingDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCampusId() : int
    {
        return $this->campusId;
    }
    /**
     * 
     *
     * @param int $campusId
     *
     * @return self
     */
    public function setCampusId(int $campusId) : self
    {
        $this->initialized['campusId'] = true;
        $this->campusId = $campusId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStatusId() : int
    {
        return $this->statusId;
    }
    /**
     * 
     *
     * @param int $statusId
     *
     * @return self
     */
    public function setStatusId(int $statusId) : self
    {
        $this->initialized['statusId'] = true;
        $this->statusId = $statusId;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getFirstContact() : ?\DateTime
    {
        return $this->firstContact;
    }
    /**
     * 
     *
     * @param \DateTime|null $firstContact
     *
     * @return self
     */
    public function setFirstContact(?\DateTime $firstContact) : self
    {
        $this->initialized['firstContact'] = true;
        $this->firstContact = $firstContact;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getDateOfBelonging() : ?\DateTime
    {
        return $this->dateOfBelonging;
    }
    /**
     * 
     *
     * @param \DateTime|null $dateOfBelonging
     *
     * @return self
     */
    public function setDateOfBelonging(?\DateTime $dateOfBelonging) : self
    {
        $this->initialized['dateOfBelonging'] = true;
        $this->dateOfBelonging = $dateOfBelonging;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getDateOfEntry() : ?\DateTime
    {
        return $this->dateOfEntry;
    }
    /**
     * 
     *
     * @param \DateTime|null $dateOfEntry
     *
     * @return self
     */
    public function setDateOfEntry(?\DateTime $dateOfEntry) : self
    {
        $this->initialized['dateOfEntry'] = true;
        $this->dateOfEntry = $dateOfEntry;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getDateOfResign() : ?\DateTime
    {
        return $this->dateOfResign;
    }
    /**
     * 
     *
     * @param \DateTime|null $dateOfResign
     *
     * @return self
     */
    public function setDateOfResign(?\DateTime $dateOfResign) : self
    {
        $this->initialized['dateOfResign'] = true;
        $this->dateOfResign = $dateOfResign;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getDateOfBaptism() : ?\DateTime
    {
        return $this->dateOfBaptism;
    }
    /**
     * 
     *
     * @param \DateTime|null $dateOfBaptism
     *
     * @return self
     */
    public function setDateOfBaptism(?\DateTime $dateOfBaptism) : self
    {
        $this->initialized['dateOfBaptism'] = true;
        $this->dateOfBaptism = $dateOfBaptism;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPlaceOfBaptism() : ?string
    {
        return $this->placeOfBaptism;
    }
    /**
     * 
     *
     * @param string|null $placeOfBaptism
     *
     * @return self
     */
    public function setPlaceOfBaptism(?string $placeOfBaptism) : self
    {
        $this->initialized['placeOfBaptism'] = true;
        $this->placeOfBaptism = $placeOfBaptism;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBaptisedBy() : ?string
    {
        return $this->baptisedBy;
    }
    /**
     * 
     *
     * @param string|null $baptisedBy
     *
     * @return self
     */
    public function setBaptisedBy(?string $baptisedBy) : self
    {
        $this->initialized['baptisedBy'] = true;
        $this->baptisedBy = $baptisedBy;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReferredBy() : ?string
    {
        return $this->referredBy;
    }
    /**
     * 
     *
     * @param string|null $referredBy
     *
     * @return self
     */
    public function setReferredBy(?string $referredBy) : self
    {
        $this->initialized['referredBy'] = true;
        $this->referredBy = $referredBy;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReferredTo() : ?string
    {
        return $this->referredTo;
    }
    /**
     * 
     *
     * @param string|null $referredTo
     *
     * @return self
     */
    public function setReferredTo(?string $referredTo) : self
    {
        $this->initialized['referredTo'] = true;
        $this->referredTo = $referredTo;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGrowPathId() : ?int
    {
        return $this->growPathId;
    }
    /**
     * 
     *
     * @param int|null $growPathId
     *
     * @return self
     */
    public function setGrowPathId(?int $growPathId) : self
    {
        $this->initialized['growPathId'] = true;
        $this->growPathId = $growPathId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsArchived() : bool
    {
        return $this->isArchived;
    }
    /**
     * 
     *
     * @param bool $isArchived
     *
     * @return self
     */
    public function setIsArchived(bool $isArchived) : self
    {
        $this->initialized['isArchived'] = true;
        $this->isArchived = $isArchived;
        return $this;
    }
}