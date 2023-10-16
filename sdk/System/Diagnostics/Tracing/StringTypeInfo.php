<?php
namespace System\Diagnostics\Tracing;
/**
 */
class StringTypeInfo extends \System\Diagnostics\Tracing\TraceLoggingTypeInfo
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Diagnostics\Tracing\EventLevel
	 * @property
	 */
	public readonly $Level;
	/**
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 * @property
	 */
	public readonly $Opcode;
	/**
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 * @property
	 */
	public readonly $Keywords;
	/**
	 * @var \System\Diagnostics\Tracing\EventTags
	 * @property
	 */
	public readonly $Tags;
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function Instance(){}
}
