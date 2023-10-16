<?php
namespace System\Runtime\CompilerServices;
/**
 */
class PortableTailCallFrame extends \System\ValueType
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $TailCallAwareReturnAddress;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $NextCall;
}
