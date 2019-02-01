<?php
declare(strict_types=1);

namespace App\Database\Entities\MailChimp;

use Doctrine\ORM\Mapping as ORM;
use EoneoPay\Utils\Str;

/**
 * @ORM\Entity()
 */
class MailChimpMember extends MailChimpEntity
{
    /**
     * @ORM\Id()
     * @ORM\Column(name="id", type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     *
     * @var string
     */
     private $memberId;

    /**
     * @ORM\Column(name="merge_fields", type="array")
     *
     * @var array
     */
     private $mergeFields;

    /**
     * @ORM\Column(name="email_address", type="string")
     *
     * @var string
     */
     private $emailAddress;

    /**
     * @ORM\Column(name="mail_chimp_id", type="string", nullable=true)
     *
     * @var string
     */
     private $mailChimpId;

    /**
     * @ORM\Column(name="mail_chimp_member_id", type="string", nullable=true)
     *
     * @var string
     */
     private $mailChimpMemberId;

    /**
     * @ORM\Column(name="status", type="string")
     *
     * @var string
     */
     private $status;

    /**
     * Get id.
     *
     * @return null|string
     */
    public function getId(): ?string
    {
        return $this->memberId;
    }

    /**
     * Get mailchimp id of the list.
     *
     * @return null|string
     */
    public function getMailChimpId(): ?string
    {
        return $this->mailChimpId;
    }

    /**
     * Get mail_chimp_member_id id of the list.
     *
     * @return null|string
     */
    public function getMailChimpMemberId(): ?string
    {
        return $this->mailChimpMemberId;
    }

    /**
     * Get validation rules for mailchimp entity.
     *
     * @return array
     */
    public function getValidationRules(): array
    {
        return [
            'merge_fields' => 'required|array',
            'merge_fields.FNAME' => 'required|string',
            'merge_fields.LNAME' => 'required|string',
            'email_address' => 'required|email',
            'mail_chimp_id' => 'required|string',
            'status' => 'required|string'
        ];
    }

    /**
     * Set mailchimp id of the list.
     *
     * @param string $mailChimpId
     *
     * @return \App\Database\Entities\MailChimp\MailChimpMember
     */
    public function setMailChimpId(string $mailChimpId): MailChimpMember
    {
        $this->mailChimpId = $mailChimpId;

        return $this;
    }

    /**
     * Set mailchimp member id of the list.
     *
     * @param string $mailChimpMemberId
     *
     * @return \App\Database\Entities\MailChimp\MailChimpMember
     */
    public function setMailChimpMemberId(string $mailChimpMemberId): MailChimpMember
    {
        $this->mailChimpMemberId = $mailChimpMemberId;

        return $this;
    }

    /**
     * Set merge fields.
     *
     * @param array $mergeFields
     *
     * @return MailChimpMember
     */
    public function setMergeFields(array $mergeFields): MailChimpMember
    {
        $this->mergeFields = $mergeFields;

        return $this;
    }

    /**
     * Set mailchimp id of the list.
     *
     * @param string $emailAddress
     *
     * @return \App\Database\Entities\MailChimp\MailChimpMember
     */
    public function setEmailAddress(string $emailAddress): MailChimpMember
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Set mailchimp id of the list.
     *
     * @param string $status
     *
     * @return \App\Database\Entities\MailChimp\MailChimpMember
     */
    public function setStatus(string $status): MailChimpMember
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get array representation of entity.
     *
     * @return array
     */
    public function toArray(): array
    {
        $array = [];
        $str = new Str();

        foreach (\get_object_vars($this) as $property => $value) {
            $array[$str->snake($property)] = $value;
        }

        return $array;
    }

}
