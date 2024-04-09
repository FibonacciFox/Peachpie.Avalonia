<?php
namespace Avalonia\Collections\Pooled;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ThrowHelperOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function ThrowArgumentOutOfRangeException_1 (){}
	/**
	 * @deprecated
	 * @param \Avalonia\Collections\Pooled\ExceptionArgument $argument
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function ThrowArgumentOutOfRangeException_2 ($argument){}
	/**
	 * @deprecated
	 * @param \Avalonia\Collections\Pooled\ExceptionArgument $argument
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function ThrowArgumentOutOfRangeException_3 ($argument, $resource){}
	/**
	 * @deprecated
	 * @param \Avalonia\Collections\Pooled\ExceptionArgument $argument
	 * @param \System\Int32|int $paramNumber
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function ThrowArgumentOutOfRangeException_4 ($argument, $paramNumber, $resource){}
	/**
	 * @deprecated
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function ThrowArgumentException_1 ($resource){}
	/**
	 * @deprecated
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @param \Avalonia\Collections\Pooled\ExceptionArgument $argument
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function ThrowArgumentException_2 ($resource, $argument){}
	/**
	 * @deprecated
	 * @param \Avalonia\Collections\Pooled\ExceptionArgument $argument
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function ThrowArgumentNullException_1 ($argument){}
	/**
	 * @deprecated
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function ThrowArgumentNullException_2 ($resource){}
	/**
	 * @deprecated
	 * @param \Avalonia\Collections\Pooled\ExceptionArgument $argument
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function ThrowArgumentNullException_3 ($argument, $resource){}
	/**
	 * @deprecated
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function ThrowInvalidOperationException_1 ($resource){}
	/**
	 * @deprecated
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @param \System\Exception $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function ThrowInvalidOperationException_2 ($resource, $e){}
	/**
	 * @deprecated
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function ThrowNotSupportedException_1 ($resource){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function ThrowNotSupportedException_2 (){}
	/**
	 * @deprecated
	 * @param \System\String|string $objectName
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function ThrowObjectDisposedException_1 ($objectName, $resource){}
	/**
	 * @deprecated
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function ThrowObjectDisposedException_2 ($resource){}
	/**
	 * @deprecated
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @return \System\ArgumentException
	 */
	#[MethodOverride]private static function GetArgumentException_1 ($resource){}
	/**
	 * @deprecated
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @param \Avalonia\Collections\Pooled\ExceptionArgument $argument
	 * @return \System\ArgumentException
	 */
	#[MethodOverride]private static function GetArgumentException_2 ($resource, $argument){}
	/**
	 * @deprecated
	 * @param \Avalonia\Collections\Pooled\ExceptionArgument $argument
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @return \System\ArgumentOutOfRangeException
	 */
	#[MethodOverride]private static function GetArgumentOutOfRangeException_1 ($argument, $resource){}
	/**
	 * @deprecated
	 * @param \Avalonia\Collections\Pooled\ExceptionArgument $argument
	 * @param \System\Int32|int $paramNumber
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @return \System\ArgumentOutOfRangeException
	 */
	#[MethodOverride]private static function GetArgumentOutOfRangeException_2 ($argument, $paramNumber, $resource){}
}
class ThrowHelper extends \System\Object
{
	use ThrowHelperOverride;

	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowArrayTypeMismatchException(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowIndexOutOfRangeException(){}
	/**
	 * @uses ThrowHelperOverride::ThrowArgumentOutOfRangeException_1 <br>protected , args: ()<br>
	 * @uses ThrowHelperOverride::ThrowArgumentOutOfRangeException_2 <br>protected , args: ($argument)<br>
	 * @uses ThrowHelperOverride::ThrowArgumentOutOfRangeException_3 <br>protected , args: ($argument, $resource)<br>
	 * @uses ThrowHelperOverride::ThrowArgumentOutOfRangeException_4 <br>protected , args: ($argument, $paramNumber, $resource)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function ThrowArgumentOutOfRangeException (\override ...$args){}
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
	 * @param \T|object $key
	 * @param \System\Type $targetType
	 * @return \System\Void|void
	 */
	protected static function ThrowWrongKeyTypeArgumentException($key, $targetType){}
	/**
	 * @param \T|object $value
	 * @param \System\Type $targetType
	 * @return \System\Void|void
	 */
	protected static function ThrowWrongValueTypeArgumentException($value, $targetType){}
	private static function GetAddingDuplicateWithKeyArgumentException($key){}
	/**
	 * @param \T|object $key
	 * @return \System\Void|void
	 */
	protected static function ThrowAddingDuplicateWithKeyArgumentException($key){}
	/**
	 * @param \T|object $key
	 * @return \System\Void|void
	 */
	protected static function ThrowKeyNotFoundException($key){}
	/**
	 * @uses ThrowHelperOverride::ThrowArgumentException_1 <br>protected , args: ($resource)<br>
	 * @uses ThrowHelperOverride::ThrowArgumentException_2 <br>protected , args: ($resource, $argument)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function ThrowArgumentException (\override ...$args){}
	private static function GetArgumentNullException($argument){}
	/**
	 * @uses ThrowHelperOverride::ThrowArgumentNullException_1 <br>protected , args: ($argument)<br>
	 * @uses ThrowHelperOverride::ThrowArgumentNullException_2 <br>protected , args: ($resource)<br>
	 * @uses ThrowHelperOverride::ThrowArgumentNullException_3 <br>protected , args: ($argument, $resource)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function ThrowArgumentNullException (\override ...$args){}
	/**
	 * @uses ThrowHelperOverride::ThrowInvalidOperationException_1 <br>protected , args: ($resource)<br>
	 * @uses ThrowHelperOverride::ThrowInvalidOperationException_2 <br>protected , args: ($resource, $e)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function ThrowInvalidOperationException (\override ...$args){}
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
	 * @uses ThrowHelperOverride::ThrowNotSupportedException_1 <br>protected , args: ($resource)<br>
	 * @uses ThrowHelperOverride::ThrowNotSupportedException_2 <br>protected , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function ThrowNotSupportedException (\override ...$args){}
	/**
	 * @param \Avalonia\Collections\Pooled\ExceptionResource $resource
	 * @return \System\Void|void
	 */
	protected static function ThrowUnauthorizedAccessException($resource){}
	/**
	 * @uses ThrowHelperOverride::ThrowObjectDisposedException_1 <br>protected , args: ($objectName, $resource)<br>
	 * @uses ThrowHelperOverride::ThrowObjectDisposedException_2 <br>protected , args: ($resource)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function ThrowObjectDisposedException (\override ...$args){}
	/**
	 * @param \System\Collections\Generic\List_1 $exceptions [generic: System\Exception]
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
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ThrowHelperOverride::GetArgumentException_1 <br>private , args: ($resource)<br>
	 * @uses ThrowHelperOverride::GetArgumentException_2 <br>private , args: ($resource, $argument)<br>
	 * @var mixed|\override ...$args
	 * @return \System\ArgumentException|mixed|\override
	 */
	#[MethodOverridePrivate]function GetArgumentException (\override ...$args){}
	private static function GetInvalidOperationException($resource){}
	private static function GetWrongKeyTypeArgumentException($key, $targetType){}
	private static function GetWrongValueTypeArgumentException($value, $targetType){}
	private static function GetKeyNotFoundException($key){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ThrowHelperOverride::GetArgumentOutOfRangeException_1 <br>private , args: ($argument, $resource)<br>
	 * @uses ThrowHelperOverride::GetArgumentOutOfRangeException_2 <br>private , args: ($argument, $paramNumber, $resource)<br>
	 * @var mixed|\override ...$args
	 * @return \System\ArgumentOutOfRangeException|mixed|\override
	 */
	#[MethodOverridePrivate]function GetArgumentOutOfRangeException (\override ...$args){}
	private static function GetInvalidOperationException_EnumCurrent($index){}
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
	private static function GetArgumentName($argument){}
	private static function GetResourceString($resource){}
}