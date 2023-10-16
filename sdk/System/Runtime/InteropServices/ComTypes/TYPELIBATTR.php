<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
class TYPELIBATTR extends \System\ValueType
{
	/**
	 * @var \System\Guid
	 * @field
	 */
	public $guid;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $lcid;
	/**
	 * @var \System\Runtime\InteropServices\ComTypes\SYSKIND
	 * @field
	 */
	public $syskind;
	/**
	 * @var \System\Int16
	 * @field
	 */
	public $wMajorVerNum;
	/**
	 * @var \System\Int16
	 * @field
	 */
	public $wMinorVerNum;
	/**
	 * @var \System\Runtime\InteropServices\ComTypes\LIBFLAGS
	 * @field
	 */
	public $wLibFlags;
}
