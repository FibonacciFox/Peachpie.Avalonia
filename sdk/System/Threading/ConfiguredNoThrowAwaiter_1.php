<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ConfiguredNoThrowAwaiter_1 extends \System\ValueType implements 
	\System\Runtime\CompilerServices\ICriticalNotifyCompletion,
	\System\Runtime\CompilerServices\INotifyCompletion
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCompleted;
	/**
	 * @return \System\Threading\ConfiguredNoThrowAwaiter_1
	 */
	public  function GetAwaiter(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCompleted(){}
	/**
	 * @return \System\Void|void
	 */
	public  function GetResult(){}
	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public  function UnsafeOnCompleted($continuation){}
	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public  function OnCompleted($continuation){}
}
