<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RuntimeFieldHandleMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($handle){}
	/**
	 * @return \System\RuntimeType
	 */
	#[MethodOverride] protected static function GetApproxDeclaringType_1($field){}
	/**
	 * @return \System\RuntimeType
	 */
	#[MethodOverride] protected static function GetApproxDeclaringType_2($field){}
}
/**
 */
class RuntimeFieldHandle extends \System\ValueType implements 
	\System\IEquatable_1,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Value;
	/**
	 * @return \System\IRuntimeFieldInfo
	 */
	protected  function GetRuntimeFieldInfo(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Value(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsNullHandle(){}
	/**
	 * @uses RuntimeFieldHandleMethodsOverride::Equals_1 ($obj)
	 * @uses RuntimeFieldHandleMethodsOverride::Equals_2 ($handle)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\RuntimeFieldHandle
	 */
	public static function FromIntPtr($value){}
	/**
	 * @param \System\RuntimeFieldHandle $value
	 * @return \System\IntPtr
	 */
	public static function ToIntPtr($value){}
	/**
	 * @param \System\RuntimeFieldHandle $left
	 * @param \System\RuntimeFieldHandle $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\RuntimeFieldHandle $left
	 * @param \System\RuntimeFieldHandle $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Reflection\RtFieldInfo $field
	 * @return \System\String|string
	 */
	protected static function GetName($field){}
	/**
	 * @param \System\RuntimeFieldHandleInternal $field
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _GetUtf8Name($field){}
	/**
	 * @param \System\RuntimeFieldHandleInternal $field
	 * @return \System\MdUtf8String
	 */
	protected static function GetUtf8Name($field){}
	/**
	 * @param \System\RuntimeFieldHandleInternal $handle
	 * @param \System\UInt32 $hash
	 * @return \System\Boolean
	 */
	protected static function MatchesNameHash($handle, $hash){}
	/**
	 * @param \System\RuntimeFieldHandleInternal $field
	 * @return \System\Reflection\FieldAttributes
	 */
	protected static function GetAttributes($field){}
	/**
	 * @uses RuntimeFieldHandleMethodsOverride::GetApproxDeclaringType_1 ($field)
	 * @uses RuntimeFieldHandleMethodsOverride::GetApproxDeclaringType_2 ($field)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetApproxDeclaringType(mixed ...$args){}
	/**
	 * @param \System\Reflection\RtFieldInfo $field
	 * @return \System\Int32|int
	 */
	protected static function GetToken($field){}
	/**
	 * @param \System\Reflection\RtFieldInfo $field
	 * @param \System\Object|object $instance
	 * @param \System\RuntimeType $fieldType
	 * @param \System\RuntimeType $declaringType
	 * @param \System\Boolean& $domainInitialized
	 * @return \System\Object|object
	 */
	protected static function GetValue($field, $instance, $fieldType, $declaringType, $domainInitialized){}
	/**
	 * @param \System\Reflection\RtFieldInfo $field
	 * @param \System\RuntimeType $fieldType
	 * @param \System\Void* $pTypedRef
	 * @param \System\RuntimeType $contextType
	 * @return \System\Object|object
	 */
	protected static function GetValueDirect($field, $fieldType, $pTypedRef, $contextType){}
	/**
	 * @param \System\Reflection\RtFieldInfo $field
	 * @param \System\Object|object $obj
	 * @param \System\Object|object $value
	 * @param \System\RuntimeType $fieldType
	 * @param \System\Reflection\FieldAttributes $fieldAttr
	 * @param \System\RuntimeType $declaringType
	 * @param \System\Boolean& $domainInitialized
	 * @return \System\Void|void
	 */
	protected static function SetValue($field, $obj, $value, $fieldType, $fieldAttr, $declaringType, $domainInitialized){}
	/**
	 * @param \System\Reflection\RtFieldInfo $field
	 * @param \System\RuntimeType $fieldType
	 * @param \System\Void* $pTypedRef
	 * @param \System\Object|object $value
	 * @param \System\RuntimeType $contextType
	 * @return \System\Void|void
	 */
	protected static function SetValueDirect($field, $fieldType, $pTypedRef, $value, $contextType){}
	/**
	 * @param \System\RuntimeFieldHandleInternal $field
	 * @param \System\RuntimeType $declaringType
	 * @return \System\RuntimeFieldHandleInternal
	 */
	protected static function GetStaticFieldForGenericType($field, $declaringType){}
	/**
	 * @param \System\RuntimeFieldHandleInternal $field
	 * @return \System\Boolean
	 */
	protected static function AcquiresContextFromThis($field){}
	/**
	 * @param \System\RuntimeFieldHandleInternal $method
	 * @return \System\Reflection\LoaderAllocator
	 */
	protected static function GetLoaderAllocator($method){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public  function GetObjectData($info, $context){}
}
