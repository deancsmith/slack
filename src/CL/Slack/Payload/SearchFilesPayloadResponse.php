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

use CL\Slack\Model\FileSearchResult;
use JMS\Serializer\Annotation as Serializer;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
class SearchFilesPayloadResponse extends AbstractSearchPayloadResponse
{
    /**
     * @var FileSearchResult
     *
     * @Serializer\Type("CL\Slack\Model\FileSearchResult")
     */
    private $files;

    /**
     * @return FileSearchResult
     */
    public function getFileSearchResult()
    {
        return $this->files;
    }
}
