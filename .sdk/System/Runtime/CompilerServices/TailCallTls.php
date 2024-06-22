<?php
namespace System\Runtime\CompilerServices;
final class TailCallTls extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\Runtime\CompilerServices\PortableTailCallFrame*
	 */
	public $Frame;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	public $ArgBuffer;

}