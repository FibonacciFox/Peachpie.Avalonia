<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TraceLoggingEventTypesOverride {
	/**
	 * @deprecated
	 * @param \System\Reflection\ParameterInfo $paramInfos
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	#[MethodOverride]private static function MakeArray_1 ($paramInfos){}
	/**
	 * @deprecated
	 * @param \System\Type $types
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	#[MethodOverride]private static function MakeArray_2 ($types){}
	/**
	 * @deprecated
	 * @param \System\Diagnostics\Tracing\TraceLoggingTypeInfo $typeInfos
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	#[MethodOverride]private static function MakeArray_3 ($typeInfos){}
}
class TraceLoggingEventTypes extends \System\Object
{
	use TraceLoggingEventTypesOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\TraceLoggingTypeInfo[]
	 */
	protected $typeInfos;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String[]|array
	 */
	protected $paramNames;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	protected $name;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\EventTags
	 */
	protected $tags;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Byte
	 */
	protected $level;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Byte
	 */
	protected $opcode;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	protected $keywords;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Byte[]
	 */
	protected $typeMetadata;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	protected $scratchSize;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	protected $dataCount;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	protected $pinCount;
	/**
	 * @param \System\String|string $name
	 * @param \System\Diagnostics\Tracing\EventTags $tags
	 * @return \System\Diagnostics\Tracing\NameInfo
	 */
	protected function GetNameInfo($name, $tags){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses TraceLoggingEventTypesOverride::MakeArray_1 <br>private , args: ($paramInfos)<br>
	 * @uses TraceLoggingEventTypesOverride::MakeArray_2 <br>private , args: ($types)<br>
	 * @uses TraceLoggingEventTypesOverride::MakeArray_3 <br>private , args: ($typeInfos)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo|mixed|\override
	 */
	#[MethodOverridePrivate]function MakeArray (\override ...$args){}
	private static function MakeParamNameArray($paramInfos){}
}