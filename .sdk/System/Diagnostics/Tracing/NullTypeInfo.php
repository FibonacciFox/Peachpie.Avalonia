<?php
namespace System\Diagnostics\Tracing;
final class NullTypeInfo extends \System\Diagnostics\Tracing\TraceLoggingTypeInfo
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventLevel
	 * @since readonly
	 */
	public $Level;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 * @since readonly
	 */
	public $Opcode;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 * @since readonly
	 */
	public $Keywords;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventTags
	 * @since readonly
	 */
	public $Tags;
	/**
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function Instance(){}
	/**
	 */
	public function __construct(){}
}