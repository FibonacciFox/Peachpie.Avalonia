<?php
namespace System\Threading;
/**
 */
class Monitor extends \System\ValueType
{
	/**
	 * @var \Interop+Kernel32+CRITICAL_SECTION
	 * @field
	 */
	public $_criticalSection;
	/**
	 * @var \Interop+Kernel32+CONDITION_VARIABLE
	 * @field
	 */
	public $_conditionVariable;
}
