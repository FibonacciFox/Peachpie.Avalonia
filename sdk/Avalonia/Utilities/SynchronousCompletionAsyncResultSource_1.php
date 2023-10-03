<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class SynchronousCompletionAsyncResultSource_1 extends \System\Object
{
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsCompleted(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_IsCompleted($value){}
	/**
	 * @return \Avalonia\Utilities\SynchronousCompletionAsyncResult_1
	 */
	public  function get_AsyncResult(){}
	/**
	 * @return \Avalonia\Utilities\T
	 */
	protected  function get_Result(){}
	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	protected  function OnCompleted($continuation){}
	/**
	 * @param \Avalonia\Utilities\T $result
	 * @return \System\Void|void
	 */
	public  function SetResult($result){}
	/**
	 * @param \Avalonia\Utilities\T $result
	 * @return \System\Void|void
	 */
	public  function TrySetResult($result){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
