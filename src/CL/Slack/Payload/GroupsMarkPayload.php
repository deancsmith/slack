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
 *
 * @link Official documentation at https://api.slack.com/methods/groups.mark
 */
class GroupsMarkPayload extends AbstractPayload
{

    /**
     * Slack seems to want to call this option "channel", but I can't agree with that (the format of the value is different),
     * and will just pretend to my users it's a "group" (ID)
     *
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $channel;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    private $ts;

    /**
     * @param string $groupId ID of the group to set reading cursor in.
     */
    public function setGroupId($groupId)
    {
        $this->channel = $groupId;
    }

    /**
     * @return string ID of the group to set reading cursor in.
     */
    public function getGroupId()
    {
        return $this->channel;
    }

    /**
     * @param float $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->ts = $timestamp;
    }

    /**
     * @return float
     */
    public function getTimestamp()
    {
        return $this->ts;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'groups.mark';
    }
}
