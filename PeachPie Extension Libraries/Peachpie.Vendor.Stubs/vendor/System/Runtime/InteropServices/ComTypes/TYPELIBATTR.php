<?php
namespace System\Runtime\InteropServices\ComTypes;
final class TYPELIBATTR extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\Guid
	 */
	public $guid;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $lcid;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\SYSKIND
	 */
	public $syskind;
	/**
	 * @field
	 * @var \System\Int16
	 */
	public $wMajorVerNum;
	/**
	 * @field
	 * @var \System\Int16
	 */
	public $wMinorVerNum;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\LIBFLAGS
	 */
	public $wLibFlags;

}