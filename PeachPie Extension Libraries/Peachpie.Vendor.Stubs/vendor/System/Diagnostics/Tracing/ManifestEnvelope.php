<?php
namespace System\Diagnostics\Tracing;
final class ManifestEnvelope extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\ManifestEnvelope+ManifestFormats
	 */
	public $Format;
	/**
	 * @field
	 * @var \System\Byte
	 */
	public $MajorVersion;
	/**
	 * @field
	 * @var \System\Byte
	 */
	public $MinorVersion;
	/**
	 * @field
	 * @var \System\Byte
	 */
	public $Magic;
	/**
	 * @field
	 * @var \System\UInt16
	 */
	public $TotalChunks;
	/**
	 * @field
	 * @var \System\UInt16
	 */
	public $ChunkNumber;

}