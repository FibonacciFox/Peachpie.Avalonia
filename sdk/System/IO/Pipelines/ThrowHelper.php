<?php
namespace System\IO\Pipelines;
/**
 */
class ThrowHelper extends \System\Object
{
	/**
	 * @param \System\IO\Pipelines\ExceptionArgument $argument
	 * @return \System\Void|void
	 */
	protected static function ThrowArgumentOutOfRangeException($argument){}
	/**
	 * @param \System\IO\Pipelines\ExceptionArgument $argument
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateArgumentOutOfRangeException($argument){}
	/**
	 * @param \System\IO\Pipelines\ExceptionArgument $argument
	 * @return \System\Void|void
	 */
	protected static function ThrowArgumentNullException($argument){}
	/**
	 * @param \System\IO\Pipelines\ExceptionArgument $argument
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateArgumentNullException($argument){}
	/**
	 * @return \System\Void|void
	 */
	public static function ThrowInvalidOperationException_AlreadyReading(){}
	/**
	 * @return \System\Exception
	 */
	public static function CreateInvalidOperationException_AlreadyReading(){}
	/**
	 * @return \System\Void|void
	 */
	public static function ThrowInvalidOperationException_NoReadToComplete(){}
	/**
	 * @return \System\Exception
	 */
	public static function CreateInvalidOperationException_NoReadToComplete(){}
	/**
	 * @return \System\Void|void
	 */
	public static function ThrowInvalidOperationException_NoConcurrentOperation(){}
	/**
	 * @return \System\Exception
	 */
	public static function CreateInvalidOperationException_NoConcurrentOperation(){}
	/**
	 * @return \System\Void|void
	 */
	public static function ThrowInvalidOperationException_GetResultNotCompleted(){}
	/**
	 * @return \System\Exception
	 */
	public static function CreateInvalidOperationException_GetResultNotCompleted(){}
	/**
	 * @return \System\Void|void
	 */
	public static function ThrowInvalidOperationException_NoWritingAllowed(){}
	/**
	 * @return \System\Exception
	 */
	public static function CreateInvalidOperationException_NoWritingAllowed(){}
	/**
	 * @return \System\Void|void
	 */
	public static function ThrowInvalidOperationException_NoReadingAllowed(){}
	/**
	 * @return \System\Exception
	 */
	public static function CreateInvalidOperationException_NoReadingAllowed(){}
	/**
	 * @return \System\Void|void
	 */
	public static function ThrowInvalidOperationException_InvalidExaminedPosition(){}
	/**
	 * @return \System\Exception
	 */
	public static function CreateInvalidOperationException_InvalidExaminedPosition(){}
	/**
	 * @return \System\Void|void
	 */
	public static function ThrowInvalidOperationException_InvalidExaminedOrConsumedPosition(){}
	/**
	 * @return \System\Exception
	 */
	public static function CreateInvalidOperationException_InvalidExaminedOrConsumedPosition(){}
	/**
	 * @return \System\Void|void
	 */
	public static function ThrowInvalidOperationException_AdvanceToInvalidCursor(){}
	/**
	 * @return \System\Exception
	 */
	public static function CreateInvalidOperationException_AdvanceToInvalidCursor(){}
	/**
	 * @return \System\Void|void
	 */
	public static function ThrowInvalidOperationException_ResetIncompleteReaderWriter(){}
	/**
	 * @return \System\Exception
	 */
	public static function CreateInvalidOperationException_ResetIncompleteReaderWriter(){}
	/**
	 * @return \System\Void|void
	 */
	public static function ThrowOperationCanceledException_ReadCanceled(){}
	/**
	 * @return \System\Exception
	 */
	public static function CreateOperationCanceledException_ReadCanceled(){}
	/**
	 * @return \System\Void|void
	 */
	public static function ThrowOperationCanceledException_FlushCanceled(){}
	/**
	 * @return \System\Exception
	 */
	public static function CreateOperationCanceledException_FlushCanceled(){}
	/**
	 * @return \System\Void|void
	 */
	public static function ThrowInvalidOperationException_InvalidZeroByteRead(){}
	/**
	 * @return \System\Exception
	 */
	public static function CreateInvalidOperationException_InvalidZeroByteRead(){}
	/**
	 * @return \System\Void|void
	 */
	public static function ThrowNotSupported_UnflushedBytes(){}
	/**
	 * @return \System\Exception
	 */
	public static function CreateNotSupportedException_UnflushedBytes(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
