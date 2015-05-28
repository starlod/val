<?php

namespace ValBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Register
 *
 * @ORM\Table(name="register")
 * @ORM\Entity
 */
class Register
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=true)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=64, nullable=true)
     */
    private $firstName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=64, nullable=true)
     */
    private $lastName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="first_name_kana", type="string", length=64, nullable=true)
     */
    private $firstNameKana = '';

    /**
     * @var string
     *
     * @ORM\Column(name="last_name_kana", type="string", length=64, nullable=true)
     */
    private $lastNameKana = '';

    /**
     * @var string
     *
     * @ORM\Column(name="first_name_en", type="string", length=64, nullable=true)
     */
    private $firstNameEn = '';

    /**
     * @var string
     *
     * @ORM\Column(name="last_name_en", type="string", length=64, nullable=true)
     */
    private $lastNameEn = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", length=64, nullable=true)
     */
    private $nickname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="site_url", type="string", length=255, nullable=true)
     */
    private $siteUrl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="feed_url", type="string", length=255, nullable=true)
     */
    private $feedUrl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="twitter", type="string", length=255, nullable=true)
     */
    private $twitter = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ameba", type="string", length=255, nullable=true)
     */
    private $ameba = '';

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=255, nullable=true)
     */
    private $facebook = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="remarks", type="text", nullable=true)
     */
    private $remarks;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Register
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Register
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Register
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set firstNameKana
     *
     * @param string $firstNameKana
     * @return Register
     */
    public function setFirstNameKana($firstNameKana)
    {
        $this->firstNameKana = $firstNameKana;

        return $this;
    }

    /**
     * Get firstNameKana
     *
     * @return string
     */
    public function getFirstNameKana()
    {
        return $this->firstNameKana;
    }

    /**
     * Set lastNameKana
     *
     * @param string $lastNameKana
     * @return Register
     */
    public function setLastNameKana($lastNameKana)
    {
        $this->lastNameKana = $lastNameKana;

        return $this;
    }

    /**
     * Get lastNameKana
     *
     * @return string
     */
    public function getLastNameKana()
    {
        return $this->lastNameKana;
    }

    /**
     * Set firstNameEn
     *
     * @param string $firstNameEn
     * @return Register
     */
    public function setFirstNameEn($firstNameEn)
    {
        $this->firstNameEn = $firstNameEn;

        return $this;
    }

    /**
     * Get firstNameEn
     *
     * @return string
     */
    public function getFirstNameEn()
    {
        return $this->firstNameEn;
    }

    /**
     * Set lastNameEn
     *
     * @param string $lastNameEn
     * @return Register
     */
    public function setLastNameEn($lastNameEn)
    {
        $this->lastNameEn = $lastNameEn;

        return $this;
    }

    /**
     * Get lastNameEn
     *
     * @return string
     */
    public function getLastNameEn()
    {
        return $this->lastNameEn;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     * @return Register
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set siteUrl
     *
     * @param string $siteUrl
     * @return Register
     */
    public function setSiteUrl($siteUrl)
    {
        $this->siteUrl = $siteUrl;

        return $this;
    }

    /**
     * Get siteUrl
     *
     * @return string
     */
    public function getSiteUrl()
    {
        return $this->siteUrl;
    }

    /**
     * Set feedUrl
     *
     * @param string $feedUrl
     * @return Register
     */
    public function setFeedUrl($feedUrl)
    {
        $this->feedUrl = $feedUrl;

        return $this;
    }

    /**
     * Get feedUrl
     *
     * @return string
     */
    public function getFeedUrl()
    {
        return $this->feedUrl;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     * @return Register
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set ameba
     *
     * @param string $ameba
     * @return Register
     */
    public function setAmeba($ameba)
    {
        $this->ameba = $ameba;

        return $this;
    }

    /**
     * Get ameba
     *
     * @return string
     */
    public function getAmeba()
    {
        return $this->ameba;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return Register
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Register
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     * @return Register
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Get remarks
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }
}
