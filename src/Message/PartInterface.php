<?php

declare(strict_types=1);

namespace Ddeboer\Imap\Message;

/**
 * A message part.
 */
interface PartInterface extends \RecursiveIterator
{
    const TYPE_TEXT = 'text';
    const TYPE_MULTIPART = 'multipart';
    const TYPE_MESSAGE = 'message';
    const TYPE_APPLICATION = 'application';
    const TYPE_AUDIO = 'audio';
    const TYPE_IMAGE = 'image';
    const TYPE_VIDEO = 'video';
    const TYPE_MODEL = 'model';
    const TYPE_OTHER = 'other';
    const TYPE_UNKNOWN = 'unknown';

    const ENCODING_7BIT = '7bit';
    const ENCODING_8BIT = '8bit';
    const ENCODING_BINARY = 'binary';
    const ENCODING_BASE64 = 'base64';
    const ENCODING_QUOTED_PRINTABLE = 'quoted-printable';

    const SUBTYPE_PLAIN = 'PLAIN';
    const SUBTYPE_HTML = 'HTML';

    /**
     * Get message number (from headers).
     *
     * @return int
     */
    public function getNumber(): int;

    /**
     * Part charset.
     *
     * @return string
     */
    public function getCharset();

    /**
     * Part type.
     *
     * @return null|string
     */
    public function getType();

    /**
     * Part subtype.
     *
     * @return null|string
     */
    public function getSubtype();

    /**
     * Part encoding.
     *
     * @return null|string
     */
    public function getEncoding();

    /**
     * Part disposition.
     *
     * @return null|string
     */
    public function getDisposition();

    /**
     * Part bytes.
     *
     * @return null|string
     */
    public function getBytes();

    /**
     * Part lines.
     *
     * @return null|string
     */
    public function getLines();

    /**
     * Part parameters.
     *
     * @return Parameters
     */
    public function getParameters(): Parameters;

    /**
     * Get raw part content.
     *
     * @return string
     */
    public function getContent(): string;

    /**
     * Get decoded part content.
     *
     * @return string
     */
    public function getDecodedContent(): string;

    /**
     * Part structure.
     *
     * @return \stdClass
     */
    public function getStructure(): \stdClass;

    /**
     * Get an array of all parts for this message.
     *
     * @return PartInterface[]
     */
    public function getParts(): array;
}
