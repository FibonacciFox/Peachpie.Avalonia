<?php
namespace Avalonia\Collections\Pooled;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ThrowHelperMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ThrowArgumentOutOfRangeException_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ThrowArgumentOutOfRangeException_2($argument){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ThrowArgumentOutOfRangeException_3($argument, $resource){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ThrowArgumentOutOfRangeException_4($argument, $paramNumber, $resource){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ThrowArgumentException_1($resource){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ThrowArgumentException_2($resource, $argument){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ThrowArgumentNullException_1($argument){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ThrowArgumentNullException_2($resource){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ThrowArgumentNullException_3($argument, $resource){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ThrowInvalidOperationException_1($resource){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ThrowInvalidOperationException_2($resource, $e){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ThrowNotSupportedException_1($resource){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ThrowNotSupportedException_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ThrowObjectDisposedException_1($objectName, $resource){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ThrowObjectDisposedException_2($resource){}
	/**
	 * @return \System\ArgumentException
	 */
	#[MethodOverride] private static function GetArgumentException_1($resource){}
	/**
	 * @return \System\ArgumentException
	 */
	#[MethodOverride] private static function GetArgumentException_2($resource, $argument){}
	/**
	 * @return \System\ArgumentOutOfRangeException
	 */
	#[MethodOverride] private static function GetArgumentOutOfRangeException_1($argument, $resource){}
	/**
	 * @return \System\ArgumentOutOfRangeException
	 */
	#[MethodOverride] private static function GetArgumentOutOfRangeException_2($argument, $paramNumber, $resource){}
}
/**
 */
class ThrowHelper extends \System\Object
{
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowArrayTypeMismatchException(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowIndexOutOfRangeException(){}
	/**
	 * @uses ThrowHelperMethodsOverride::ThrowArgumentOutOfRangeException_1 ()
	 * @uses ThrowHelperMethodsOverride::ThrowArgumentOutOfRangeException_2 ($argument)
	 * @uses ThrowHelperMethodsOverride::ThrowArgumentOutOfRangeException_3 ($argument, $resource)
	 * @uses ThrowHelperMethodsOverride::ThrowArgumentOutOfRangeException_4 ($argument, $paramNumber, $resource)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ThrowArgumentOutOfRangeException(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowArgumentException_DestinationTooShort(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowArgumentException_OverlapAlignmentMismatch(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowArgumentOutOfRange_IndexException(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowIndexArgumentOutOfRange_NeedNonNegNumException(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowValueArgumentOutOfRange_NeedNonNegNumException(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowLengthArgumentOutOfRange_ArgumentOutOfRange_NeedNonNegNum(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowStartIndexArgumentOutOfRange_ArgumentOutOfRange_Index(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowCountArgumentOutOfRange_ArgumentOutOfRange_Count(){}
	/**
	 * @param \Avalonia\Collections\Pooled\T $key
	 * @param \System\Type $targetType
	 * @return \System\Void|void
	 */
	protected static function ThrowWrongKeyTypeArgumentException($key, $targetType){}
	/**
	 * @param \Avalonia\Collections\Pooled\T $value
	 * @param \System\Type $targetType
	 * @return \System\Void|void
	 */
	protected static function ThrowWrongValueTypeArgumentException($value, $targetType){}
	/**
	 * @param \System\Object|object $key
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAddingDuplicateWithKeyArgumentException($key){}
	/**
	 * @param \Avalonia\Collections\Pooled\T $key
	 * @return \System\Void|void
	 */
	protected static function ThrowAddingDuplicateWithKeyArgumentException($key){}
	/**
	 * @param \Avalonia\Collections\Pooled\T $key
	 * @return \System\Void|void
	 */
	protected static function ThrowKeyNotFoundException($key){}
	/**
	 * @uses ThrowHelperMethodsOverride::ThrowArgumentException_1 ($resource)
	 * @uses ThrowHelperMethodsOverride::ThrowArgumentException_2 ($resource, $argument)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ThrowArgumentException(mixed ...$args){}
	/**
	 * @param \Avalonia\Collections\Pooled\ExceptionArgument $argument
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetArgumentNullException($argument){}
	/**
	 * @uses ThrowHelperMethodsOverride::ThrowArgumentNullException_1 ($argument)
	 * @uses ThrowHelperMethodsOverride::ThrowArgumentNullException_2 ($resource)
	 * @uses ThrowHelperMethodsOverride::ThrowArgumentNullException_3 ($argument, $resource)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ThrowArgumentNullException(mixed ...$args){}
	/**
	 * @uses ThrowHelperMethodsOverride::ThrowInvalidOperationException_1 ($resource)
	 * @uses ThrowHelperMethodsOverride::ThrowInvalidOperationException_2 ($resource, $e)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ThrowInvalidOperationException(mixed ...$args){}
	/**
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @return \System\Void|void
	 */
	protected static function ThrowSerializationException($resource){}
	/**
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @return \System\Void|void
	 */
	protected static function ThrowSecurityException($resource){}
	/**
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @return \System\Void|void
	 */
	protected static function ThrowRankException($resource){}
	/**
	 * @uses ThrowHelperMethodsOverride::ThrowNotSupportedException_1 ($resource)
	 * @uses ThrowHelperMethodsOverride::ThrowNotSupportedException_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ThrowNotSupportedException(mixed ...$args){}
	/**
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @return \System\Void|void
	 */
	protected static function ThrowUnauthorizedAccessException($resource){}
	/**
	 * @uses ThrowHelperMethodsOverride::ThrowObjectDisposedException_1 ($objectName, $resource)
	 * @uses ThrowHelperMethodsOverride::ThrowObjectDisposedException_2 ($resource)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ThrowObjectDisposedException(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\List_1 $exceptions
	 * @return \System\Void|void
	 */
	protected static function ThrowAggregateException($exceptions){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowOutOfMemoryException(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowArgumentException_Argument_InvalidArrayType(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowInvalidOperationException_InvalidOperation_EnumNotStarted(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowInvalidOperationException_InvalidOperation_EnumEnded(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	protected static function ThrowInvalidOperationException_EnumCurrent($index){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowInvalidOperationException_InvalidOperation_EnumFailedVersion(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowInvalidOperationException_InvalidOperation_EnumOpCantHappen(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowInvalidOperationException_InvalidOperation_NoValue(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowInvalidOperationException_ConcurrentOperationsNotSupported(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowInvalidOperationException_HandleIsNotInitialized(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowFormatException_BadFormatSpecifier(){}
	/**
	 * @uses ThrowHelperMethodsOverride::GetArgumentException_1 ($resource)
	 * @uses ThrowHelperMethodsOverride::GetArgumentException_2 ($resource, $argument)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetArgumentException(mixed ...$args){}
	/**
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetInvalidOperationException($resource){}
	/**
	 * @param \System\Object|object $key
	 * @param \System\Type $targetType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetWrongKeyTypeArgumentException($key, $targetType){}
	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $targetType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetWrongValueTypeArgumentException($value, $targetType){}
	/**
	 * @param \System\Object|object $key
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetKeyNotFoundException($key){}
	/**
	 * @uses ThrowHelperMethodsOverride::GetArgumentOutOfRangeException_1 ($argument, $resource)
	 * @uses ThrowHelperMethodsOverride::GetArgumentOutOfRangeException_2 ($argument, $paramNumber, $resource)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetArgumentOutOfRangeException(mixed ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetInvalidOperationException_EnumCurrent($index){}
	/**
	 * @param \System\Object|object $value
	 * @param \Avalonia\Collections\Pooled\ExceptionArgument $argName
	 * @return \System\Void|void
	 */
	protected static function IfNullAndNullsAreIllegalThenThrow($value, $argName){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowForUnsupportedVectorBaseType(){}
	/**
	 * @param \Avalonia\Collections\Pooled\ExceptionArgument $argument
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetArgumentName($argument){}
	/**
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetResourceString($resource){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
