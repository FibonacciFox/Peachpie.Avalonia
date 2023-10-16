<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TraceLoggingEventTypesMethodsOverride
{
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo[]
	 */
	#[MethodOverride] private static function MakeArray_1($paramInfos){}
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo[]
	 */
	#[MethodOverride] private static function MakeArray_2($types){}
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo[]
	 */
	#[MethodOverride] private static function MakeArray_3($typeInfos){}
}
/**
 */
class TraceLoggingEventTypes extends \System\Object
{
	/**
	 * @var \System\Diagnostics\Tracing\TraceLoggingTypeInfo[]
	 * @field
	 */
	protected readonly $typeInfos;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected readonly $paramNames;
	/**
	 * @var \System\String
	 * @field
	 */
	protected readonly $name;
	/**
	 * @var \System\Diagnostics\Tracing\EventTags
	 * @field
	 */
	protected readonly $tags;
	/**
	 * @var \System\Byte
	 * @field
	 */
	protected readonly $level;
	/**
	 * @var \System\Byte
	 * @field
	 */
	protected readonly $opcode;
	/**
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 * @field
	 */
	protected readonly $keywords;
	/**
	 * @var \System\Byte[]
	 * @field
	 */
	protected readonly $typeMetadata;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $scratchSize;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $dataCount;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $pinCount;
	/**
	 * @return \System\String|string
	 */
	protected  function get_Name(){}
	/**
	 * @return \System\Diagnostics\Tracing\EventTags
	 */
	protected  function get_Tags(){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Diagnostics\Tracing\EventTags $tags
	 * @return \System\Diagnostics\Tracing\NameInfo
	 */
	protected  function GetNameInfo($name, $tags){}
	/**
	 * @uses TraceLoggingEventTypesMethodsOverride::MakeArray_1 ($paramInfos)
	 * @uses TraceLoggingEventTypesMethodsOverride::MakeArray_2 ($types)
	 * @uses TraceLoggingEventTypesMethodsOverride::MakeArray_3 ($typeInfos)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MakeArray(mixed ...$args){}
	/**
	 * @param \System\Reflection\ParameterInfo[] $paramInfos
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MakeParamNameArray($paramInfos){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
