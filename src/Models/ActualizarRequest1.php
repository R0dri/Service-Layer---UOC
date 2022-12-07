<?php

declare(strict_types=1);

/*
 * ServiceLayerUOCLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ServiceLayerUOCLib\Models;

use stdClass;

class ActualizarRequest1 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $comments;

    /**
     * @param string $comments
     */
    public function __construct(string $comments)
    {
        $this->comments = $comments;
    }

    /**
     * Returns Comments.
     */
    public function getComments(): string
    {
        return $this->comments;
    }

    /**
     * Sets Comments.
     *
     * @required
     * @maps Comments
     */
    public function setComments(string $comments): void
    {
        $this->comments = $comments;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['Comments'] = $this->comments;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
