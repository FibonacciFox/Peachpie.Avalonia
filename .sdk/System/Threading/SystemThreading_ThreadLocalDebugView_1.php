<?php
namespace System\Threading;
final class SystemThreading_ThreadLocalDebugView_1 extends \System\Object
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsValueCreated;
	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[T]
	 * @since readonly
	 */
	public $Values;
	/**
	 * @param \System\Threading\ThreadLocal_1 $tlocal [generic: T]
	 */
	public function __construct($tlocal){}
}