<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StaticsOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $settingValue
	 * @param \System\Byte $defaultValue
	 * @return \System\Byte
	 */
	#[MethodOverride]public static function Combine_1 ($settingValue, $defaultValue){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $settingValue1
	 * @param \System\Int32|int $settingValue2
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Combine_2 ($settingValue1, $settingValue2){}
	/**
	 * @deprecated
	 * @param \System\Reflection\PropertyInfo $propInfo
	 * @return \AttributeType
	 */
	#[MethodOverride]public static function GetCustomAttribute_1 ($propInfo){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @return \AttributeType
	 */
	#[MethodOverride]public static function GetCustomAttribute_2 ($type){}
}
class Statics extends \System\Object
{
	use StaticsOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\TraceLoggingDataType
	 */
	public static $IntPtrType;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\TraceLoggingDataType
	 */
	public static $UIntPtrType;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\TraceLoggingDataType
	 */
	public static $HexIntPtrType;
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
	 * @param \System\Byte $metadata
	 * @return \System\Void|void
	 */
	public static function EncodeTags($tags, $pos, $metadata){}
	/**
	 * @uses StaticsOverride::Combine_1 <br>public , args: ($settingValue, $defaultValue)<br>
	 * @uses StaticsOverride::Combine_2 <br>public , args: ($settingValue1, $settingValue2)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Byte|\System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Combine (\override ...$args){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Void|void
	 */
	public static function CheckName($name){}
	/**
	 * @param \System\String|string $fieldName
	 * @return \System\Boolean|bool
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
	 * @return \System\Boolean|bool
	 */
	public static function HasCustomAttribute($propInfo, $attributeType){}
	/**
	 * @uses StaticsOverride::GetCustomAttribute_1 <br>public , args: ($propInfo)<br>
	 * @uses StaticsOverride::GetCustomAttribute_2 <br>public , args: ($type)<br>
	 * @var mixed|\override ...$args
	 * @return \AttributeType|mixed|\override
	 */
	#[MethodOverridePublic]function GetCustomAttribute (\override ...$args){}
	/**
	 * @param \System\Type $type
	 * @return \System\Type
	 */
	public static function FindEnumerableElementType($type){}
	/**
	 * @param \System\Type $type
	 * @param \System\Object|object $openType
	 * @return \System\Boolean|bool
	 */
	public static function IsGenericMatch($type, $openType){}
	/**
	 * @param \System\Type $dataType
	 * @param \System\Collections\Generic\List_1 $recursionCheck [generic: System\Type]
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function CreateDefaultTypeInfo($dataType, $recursionCheck){}
}