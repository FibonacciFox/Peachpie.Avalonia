<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RuntimeFieldHandleOverride {
	/**
	 * @deprecated
	 * @param \System\RuntimeFieldHandleInternal $field
	 * @return \System\RuntimeType
	 */
	#[MethodOverride]protected static function GetApproxDeclaringType_1 ($field){}
	/**
	 * @deprecated
	 * @param \System\IRuntimeFieldInfo $field
	 * @return \System\RuntimeType
	 */
	#[MethodOverride]protected static function GetApproxDeclaringType_2 ($field){}
}
final class RuntimeFieldHandle extends \System\ValueType implements
	\System\IEquatable_1,
	\System\Runtime\Serialization\ISerializable
{
	use RuntimeFieldHandleOverride;

	/**
	 * @property
	 * @var \System\IntPtr
	 * @since readonly
	 */
	public $Value;
	/**
	 * @return \System\IRuntimeFieldInfo
	 */
	protected function GetRuntimeFieldInfo(){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function IsNullHandle(){}
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
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\RuntimeFieldHandle $left
	 * @param \System\RuntimeFieldHandle $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Reflection\RtFieldInfo $field
	 * @return \System\String|string
	 */
	protected static function GetName($field){}
	private static function _GetUtf8Name($field){}
	/**
	 * @param \System\RuntimeFieldHandleInternal $field
	 * @return \System\MdUtf8String
	 */
	protected static function GetUtf8Name($field){}
	/**
	 * @param \System\RuntimeFieldHandleInternal $handle
	 * @param \System\UInt32 $hash
	 * @return \System\Boolean|bool
	 */
	protected static function MatchesNameHash($handle, $hash){}
	/**
	 * @param \System\RuntimeFieldHandleInternal $field
	 * @return \System\Reflection\FieldAttributes
	 */
	protected static function GetAttributes($field){}
	/**
	 * @uses RuntimeFieldHandleOverride::GetApproxDeclaringType_1 <br>protected , args: ($field)<br>
	 * @uses RuntimeFieldHandleOverride::GetApproxDeclaringType_2 <br>protected , args: ($field)<br>
	 * @var mixed|\override ...$args
	 * @return \System\RuntimeType|mixed|\override
	 */
	#[MethodOverrideProtected]function GetApproxDeclaringType (\override ...$args){}
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
	 * @return \System\Boolean|bool
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
	public function GetObjectData($info, $context){}
}