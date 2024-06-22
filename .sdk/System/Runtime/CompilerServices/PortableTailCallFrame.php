<?php
namespace System\Runtime\CompilerServices;
final class PortableTailCallFrame extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\IntPtr
	 */
	public $TailCallAwareReturnAddress;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	public $NextCall;

}