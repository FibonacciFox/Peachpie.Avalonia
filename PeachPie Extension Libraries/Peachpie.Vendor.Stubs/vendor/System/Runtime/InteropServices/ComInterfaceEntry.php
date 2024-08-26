<?php
namespace System\Runtime\InteropServices;
final class ComInterfaceEntry extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\Guid
	 */
	public $IID;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	public $Vtable;

}