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
 * @link Official documentation at https://api.slack.com/methods/presence.set
 */
class PresenceSetPayload extends AbstractPayload
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $presence;

    /**
     * @param string $presence
     */
    public function setPresence($presence)
    {
        $this->presence = $presence;
    }

    /**
     * @return string
     */
    public function getPresence()
    {
        return $this->presence;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'presence.set';
    }
}
