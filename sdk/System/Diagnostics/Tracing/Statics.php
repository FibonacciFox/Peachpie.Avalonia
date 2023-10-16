<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StaticsMethodsOverride
{
	/**
	 * @return \System\Byte
	 */
	#[MethodOverride] public static function Combine_1($settingValue, $defaultValue){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Combine_2($settingValue1, $settingValue2){}
	/**
	 * @return \System\Diagnostics\Tracing\AttributeType
	 */
	#[MethodOverride] public static function GetCustomAttribute_1($propInfo){}
	/**
	 * @return \System\Diagnostics\Tracing\AttributeType
	 */
	#[MethodOverride] public static function GetCustomAttribute_2($type){}
}
/**
 */
class Statics extends \System\Object
{
	/**
	 * @var \System\Diagnostics\Tracing\TraceLoggingDataType
	 * @field
	 */
	public readonly $IntPtrType;
	/**
	 * @var \System\Diagnostics\Tracing\TraceLoggingDataType
	 * @field
	 */
	public readonly $UIntPtrType;
	/**
	 * @var \System\Diagnostics\Tracing\TraceLoggingDataType
	 * @field
	 */
	public readonly $HexIntPtrType;
	/**
	 * @param \System\String|string $name
	 * @param \System\Int32|int $prefixSize
	 * @param \System\Int32|int $suffixSize
	 * @param \System\Int32|int $additionalSize
	 * @return \System\Byte[]
	 */
	public static function MetadataForString($name, $prefixSize, $suffixSize, $additionalSize){}
	/**
	 * @param \System\Int32|int $tags
	 * @param \System\Int32& $pos
	 * @param \System\Byte[] $metadata
	 * @return \System\Void|void
	 */
	public static function EncodeTags($tags, $pos, $metadata){}
	/**
	 * @uses StaticsMethodsOverride::Combine_1 ($settingValue, $defaultValue)
	 * @uses StaticsMethodsOverride::Combine_2 ($settingValue1, $settingValue2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Combine(mixed ...$args){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Void|void
	 */
	public static function CheckName($name){}
	/**
	 * @param \System\String|string $fieldName
	 * @return \System\Boolean
	 */
	public static function ShouldOverrideFieldName($fieldName){}
	/**
	 * @param \System\Diagnostics\Tracing\TraceLoggingDataType $baseType
	 * @param \System\Diagnostics\Tracing\EventFieldFormat $format
	 * @return \System\Diagnostics\Tracing\TraceLoggingDataType
	 */
	public static function MakeDataType($baseType, $format){}
	/**
	 * @param \System\Diagnostics\Tracing\EventFieldFormat $format
	 * @param \System\Diagnostics\Tracing\TraceLoggingDataType $native
	 * @return \System\Diagnostics\Tracing\TraceLoggingDataType
	 */
	public static function Format8($format, $native){}
	/**
	 * @param \System\Diagnostics\Tracing\EventFieldFormat $format
	 * @param \System\Diagnostics\Tracing\TraceLoggingDataType $native
	 * @return \System\Diagnostics\Tracing\TraceLoggingDataType
	 */
	public static function Format16($format, $native){}
	/**
	 * @param \System\Diagnostics\Tracing\EventFieldFormat $format
	 * @param \System\Diagnostics\Tracing\TraceLoggingDataType $native
	 * @return \System\Diagnostics\Tracing\TraceLoggingDataType
	 */
	public static function Format32($format, $native){}
	/**
	 * @param \System\Diagnostics\Tracing\EventFieldFormat $format
	 * @param \System\Diagnostics\Tracing\TraceLoggingDataType $native
	 * @return \System\Diagnostics\Tracing\TraceLoggingDataType
	 */
	public static function Format64($format, $native){}
	/**
	 * @param \System\Diagnostics\Tracing\EventFieldFormat $format
	 * @param \System\Diagnostics\Tracing\TraceLoggingDataType $nativeFormat
	 * @return \System\Diagnostics\Tracing\TraceLoggingDataType
	 */
	public static function FormatScalar($format, $nativeFormat){}
	/**
	 * @param \System\Reflection\PropertyInfo $propInfo
	 * @param \System\Type $attributeType
	 * @return \System\Boolean
	 */
	public static function HasCustomAttribute($propInfo, $attributeType){}
	/**
	 * @uses StaticsMethodsOverride::GetCustomAttribute_1 ($propInfo)
	 * @uses StaticsMethodsOverride::GetCustomAttribute_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetCustomAttribute(mixed ...$args){}
	/**
	 * @param \System\Type $type
	 * @return \System\Type
	 */
	public static function FindEnumerableElementType($type){}
	/**
	 * @param \System\Type $type
	 * @param \System\Object|object $openType
	 * @return \System\Boolean
	 */
	public static function IsGenericMatch($type, $openType){}
	/**
	 * @param \System\Type $dataType
	 * @param \System\Collections\Generic\List_1 $recursionCheck
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function CreateDefaultTypeInfo($dataType, $recursionCheck){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
