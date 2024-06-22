<?php
namespace System\Runtime\InteropServices\ComTypes;
final class STATSTG extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\String|string
	 */
	public $pwcsName;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $type;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	public $cbSize;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\FILETIME
	 */
	public $mtime;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\FILETIME
	 */
	public $ctime;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\FILETIME
	 */
	public $atime;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $grfMode;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $grfLocksSupported;
	/**
	 * @field
	 * @var \System\Guid
	 */
	public $clsid;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $grfStateBits;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $reserved;

}