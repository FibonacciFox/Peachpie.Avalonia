<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class AsyncLocalValueChangedArgs_1 extends \System\ValueType
{
	/**
	 * @var \T
	 * @property
	 */
	public readonly $PreviousValue;
	/**
	 * @var \T
	 * @property
	 */
	public readonly $CurrentValue;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $ThreadContextChanged;
	/**
	 * @return \System\Threading\T
	 */
	public  function get_PreviousValue(){}
	/**
	 * @return \System\Threading\T
	 */
	public  function get_CurrentValue(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ThreadContextChanged(){}
}
