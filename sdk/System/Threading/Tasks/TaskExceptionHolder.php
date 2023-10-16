<?php
namespace System\Threading\Tasks;
/**
 */
class TaskExceptionHolder extends \System\Object
{
	/**
	 * @return \System\Boolean
	 */
	protected  function get_ContainsFaultList(){}
	/**
	 * @param \System\Object|object $exceptionObject
	 * @param \System\Boolean $representsCancellation
	 * @return \System\Void|void
	 */
	protected  function Add($exceptionObject, $representsCancellation){}
	/**
	 * @param \System\Object|object $exceptionObject
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetCancellationException($exceptionObject){}
	/**
	 * @param \System\Object|object $exceptionObject
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddFaultException($exceptionObject){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MarkAsUnhandled(){}
	/**
	 * @param \System\Boolean $calledFromFinalizer
	 * @return \System\Void|void
	 */
	protected  function MarkAsHandled($calledFromFinalizer){}
	/**
	 * @param \System\Boolean $calledFromFinalizer
	 * @param \System\Exception $includeThisException
	 * @return \System\AggregateException
	 */
	protected  function CreateExceptionObject($calledFromFinalizer, $includeThisException){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	protected  function GetExceptionDispatchInfos(){}
	/**
	 * @return \System\Runtime\ExceptionServices\ExceptionDispatchInfo
	 */
	protected  function GetCancellationExceptionDispatchInfo(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
