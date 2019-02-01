<?php
declare(strict_types=1);

namespace Tests\App\TestCases\MailChimp;

use App\Database\Entities\MailChimp\MailChimpMember;
use Illuminate\Http\JsonResponse;
use Mailchimp\Mailchimp;
use Mockery;
use Mockery\MockInterface;
use Tests\App\TestCases\WithDatabaseTestCase;

abstract class MemberTestCase extends WithDatabaseTestCase
{
    protected const MAILCHIMP_EXCEPTION_MESSAGE = 'MailChimp exception';

    /**
     * @var array
     */
    protected $createdMemberIds = [];

    /**
     * @var array
     */
    protected static $memberData = [
        'merge_fields' => [
            'FNAME' => 'testFirstName',
            'LNAME' => 'testLastName'
        ],
        'email_address' => 'frederick15@yahoo.com',
        'mail_chimp_id' => '1d7bbcdd76',
        'status' => 'subscribed'
    ];
}
