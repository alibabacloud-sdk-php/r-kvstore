<?php

namespace AlibabaCloud\RKvstore\V20150101;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRestoreCheckPointTS()
 * @method $this withRestoreCheckPointTS($value)
 * @method string getSourceDataFilter()
 * @method $this withSourceDataFilter($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicationGroupId()
 * @method $this withReplicationGroupId($value)
 * @method string getDestinationInstanceId()
 * @method $this withDestinationInstanceId($value)
 * @method string getSourceInstanceId()
 * @method $this withSourceInstanceId($value)
 * @method string getDestinationDataFilter()
 * @method $this withDestinationDataFilter($value)
 */
class AddBindingTunnel extends Rpc
{
    public $product = 'R-kvstore';

    public $version = '2015-01-01';

    public $method = 'POST';

    public $serviceCode = 'redisa';
}
