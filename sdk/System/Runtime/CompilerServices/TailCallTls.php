<?php
namespace System\Runtime\CompilerServices;
/**
 */
class TailCallTls extends \System\ValueType
{
	/**
	 * @var \System\Runtime\CompilerServices\PortableTailCallFrame*
	 * @field
	 */
	public $Frame;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $ArgBuffer;
}
