<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20161111\Models;

use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CreateCloudAccountResponseBody\account;
use AlibabaCloud\Tea\Model;

class CreateCloudAccountResponseBody extends Model
{
    /**
     * @var account
     */
    public $account;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'account'   => 'Account',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = null !== $this->account ? $this->account->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = account::fromMap($map['Account']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
