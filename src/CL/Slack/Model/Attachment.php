<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Model;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
class Attachment extends AbstractModel
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $fallback;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
     public $pretext;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
     public $authorName;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
     public $authorLink;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
     public $authorIcon;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
     public $title;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
     public $titleLink;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
     public $text;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
     public $color;

    /**
     * @var array
     *
     * @Serializer\Type("ArrayCollection<string, string>")
     */
     public $fields;

    public function __construct()
    {
        $this->fields = new ArrayCollection();
    }

    /**
     * @param string $fallback Required text summary of the attachment that is shown by clients that understand attachments
     *                         but choose not to show them.
     */
    public function setFallback($fallback)
    {
        $this->fallback = $fallback;
    }

    /**
     * @return string Text summary of the attachment that is shown by clients that understand attachments
     *                but choose not to show them.
     */
    public function getFallback()
    {
        return $this->fallback;
    }

    /**
     * @param string|null $pretext Optional text that should appear above the formatted data.
     */
    public function setPretext($pretext = null)
    {
        $this->pretext = $pretext;
    }

    /**
     * @return string|null Optional text that should appear above the formatted data.
     */
    public function getPretext()
    {
        return $this->pretext;
    }

    /**
     * @param string|null $authorName Small text used to display the author's name.
     */
    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;
    }

    /**
     * @return string|null Small text used to display the author's name.
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

    /**
     * @param string|null $authorLink A valid URL that will hyperlink the $authorName
     *                                text. Will only work if $authorName is present.
     */
    public function setAuthorLink($authorLink)
    {
        $this->authorLink = $authorLink;
    }

    /**
     * @return string|null A valid URL that will hyperlink the $authorName text.
     *                     Will only work if $authorName is present.
     */
    public function getAuthorLink()
    {
        return $this->authorLink;
    }

    /**
     * @param string|null $authorIcon A valid URL that displays a small 16x16px
     *                                image to the left of the $authorName text.
     *                                Will only work if $authorName is present.
     */
    public function setAuthorIcon($authorIcon)
    {
        $this->authorIcon = $authorIcon;
    }

    /**
     * @return string|null A valid URL that displays a small 16x16px image to the
     *                     left of the $authorName text. Will only work if $authorName is present.
     */
    public function getAuthorIcon()
    {
        return $this->authorIcon;
    }

    /**
     * @param string|null $title The $title is displayed as larger, bold text
     *                           near the top of a message attachment.
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string|null The $title is displayed as larger, bold text near the
     *                     top of a message attachment.
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string|null $titleLink By passing a valid URL in the $titleLink parameter
     *                               (optional), the title text will be hyperlinked.
     */
    public function setTitleLink($titleLink)
    {
        $this->titleLink = $titleLink;
    }

    /**
     * @return string|null By passing a valid URL in the $titleLink parameter (optional),
     *                     the title text will be hyperlinked.
     */
    public function getTitleLink()
    {
        return $this->titleLink;
    }

    /**
     * @param string|null $text Optional text that should appear within the attachment.
     */
    public function setText($text = null)
    {
        $this->text = $text;
    }

    /**
     * @return string|null Optional text that should appear within the attachment.
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string|null $color Can either be one of 'good', 'warning', 'danger', or any hex color code
     */
    public function setColor($color = null)
    {
        $this->color = $color;
    }

    /**
     * @return string|null Can either be one of 'good', 'warning', 'danger', or any hex color code
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $key
     * @param mixed  $value
     */
    public function setField($key, $value)
    {
        $this->fields[$key] = $value;
    }

    /**
     * @return ArrayCollection
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function getField($key)
    {
        if (!array_key_exists($key, $this->fields)) {
            throw new \InvalidArgumentException(sprintf('There is no field with that name: %s', $key));
        }

        return $this->fields[$key];
    }
}
