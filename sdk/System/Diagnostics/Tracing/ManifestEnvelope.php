<?php
namespace System\Diagnostics\Tracing;
/**
 */
class ManifestEnvelope extends \System\ValueType
{
	/**
	 * @var \System\Diagnostics\Tracing\ManifestEnvelope+ManifestFormats
	 * @field
	 */
	public $Format;
	/**
	 * @var \System\Byte
	 * @field
	 */
	public $MajorVersion;
	/**
	 * @var \System\Byte
	 * @field
	 */
	public $MinorVersion;
	/**
	 * @var \System\Byte
	 * @field
	 */
	public $Magic;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	public $TotalChunks;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	public $ChunkNumber;
}
