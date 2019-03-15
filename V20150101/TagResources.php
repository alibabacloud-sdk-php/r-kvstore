<?php

namespace AlibabaCloud\RKvstore\V20150101;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagResources extends Rpc
{
    public $product = 'R-kvstore';

    public $version = '2015-01-01';

    public $method = 'POST';

    public $serviceCode = 'redisa';

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $tag[$i]['Value'];
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $tag[$i]['Key'];
        }

        return $this;
    }
}
