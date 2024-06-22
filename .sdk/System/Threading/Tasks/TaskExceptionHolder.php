<?php
namespace System\Threading\Tasks;
final class TaskExceptionHolder extends \System\Object
{


	/**
	 * @param \System\Object|object $exceptionObject
	 * @param \System\Boolean|bool $representsCancellation
	 * @return \System\Void|void
	 */
	protected function Add($exceptionObject, $representsCancellation){}
	private function SetCancellationException($exceptionObject){}
	private function AddFaultException($exceptionObject){}
	private function MarkAsUnhandled(){}
	/**
	 * @param \System\Boolean|bool $calledFromFinalizer
	 * @return \System\Void|void
	 */
	protected function MarkAsHandled($calledFromFinalizer){}
	/**
	 * @param \System\Boolean|bool $calledFromFinalizer
	 * @param \System\Exception $includeThisException
	 * @return \System\AggregateException
	 */
	protected function CreateExceptionObject($calledFromFinalizer, $includeThisException){}
	/**
	 * @return \System\Collections\Generic\List_1[System\Runtime\ExceptionServices\ExceptionDispatchInfo]
	 */
	protected function GetExceptionDispatchInfos(){}
	/**
	 * @return \System\Runtime\ExceptionServices\ExceptionDispatchInfo
	 */
	protected function GetCancellationExceptionDispatchInfo(){}
}