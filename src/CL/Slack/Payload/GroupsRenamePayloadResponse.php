<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Payload;

use CL\Slack\Model\Group;
use JMS\Serializer\Annotation as Serializer;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
class GroupsRenamePayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var Group|null
     *
     * @Serializer\Type("CL\Slack\Model\Group")
     */
    private $group;

    /**
     * @return Group|null
     */
    public function getGroup()
    {
        return $this->group;
    }
}
