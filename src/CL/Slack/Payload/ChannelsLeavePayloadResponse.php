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

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
class ChannelsLeavePayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    private $notInChannel;

    /**
     * @return boolean
     */
    public function isNotInChannel()
    {
        return $this->notInChannel;
    }
}
