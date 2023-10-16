<?php
namespace System\Runtime\InteropServices;
/**
 */
class ComInterfaceEntry extends \System\ValueType
{
	/**
	 * @var \System\Guid
	 * @field
	 */
	public $IID;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $Vtable;
}
