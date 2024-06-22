<?php
namespace System\Diagnostics;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait WriteIfInterpolatedStringHandlerOverride {
	/**
	 * @param \System\Boolean|bool $isJITTrackingEnabled
	 * @param \System\Boolean|bool $isJITOptimizerDisabled
	 */
	#[MethodOverride]public function __construct_1 ($isJITTrackingEnabled, $isJITOptimizerDisabled){}
	/**
	 * @param \System\Diagnostics\DebuggableAttribute+DebuggingModes $modes
	 */
	#[MethodOverride]public function __construct_2 ($modes){}
}
final class DebuggableAttribute extends \System\Attribute
{
	use WriteIfInterpolatedStringHandlerOverride;

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsJITTrackingEnabled;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsJITOptimizerDisabled;
	/**
	 * @property
	 * @var \System\Diagnostics\DebuggableAttribute+DebuggingModes
	 * @since readonly
	 */
	public $DebuggingFlags;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses DebuggableAttributeOverride::__construct_1 <br>public , args: ($isJITTrackingEnabled, $isJITOptimizerDisabled)<br>
	 * @uses DebuggableAttributeOverride::__construct_2 <br>public , args: ($modes)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}