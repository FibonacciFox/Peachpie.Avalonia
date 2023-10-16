<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
class STATSTG extends \System\ValueType
{
	/**
	 * @var \System\String
	 * @field
	 */
	public $pwcsName;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $type;
	/**
	 * @var \System\Int64
	 * @field
	 */
	public $cbSize;
	/**
	 * @var \System\Runtime\InteropServices\ComTypes\FILETIME
	 * @field
	 */
	public $mtime;
	/**
	 * @var \System\Runtime\InteropServices\ComTypes\FILETIME
	 * @field
	 */
	public $ctime;
	/**
	 * @var \System\Runtime\InteropServices\ComTypes\FILETIME
	 * @field
	 */
	public $atime;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $grfMode;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $grfLocksSupported;
	/**
	 * @var \System\Guid
	 * @field
	 */
	public $clsid;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $grfStateBits;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $reserved;
}
