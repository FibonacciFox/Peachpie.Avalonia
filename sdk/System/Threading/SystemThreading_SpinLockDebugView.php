<?php
namespace System\Threading;
/**
 */
class SystemThreading_SpinLockDebugView extends \System\Object
{
	/**
	 * @var \System\Nullable_1[System\Boolean]
	 * @property
	 */
	public readonly $IsHeldByCurrentThread;
	/**
	 * @var \System\Nullable_1[System\Int32]
	 * @property
	 */
	public readonly $OwnerThreadID;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsHeld;
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_IsHeldByCurrentThread(){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_OwnerThreadID(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsHeld(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
