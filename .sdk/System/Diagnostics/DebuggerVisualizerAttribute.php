<?php
namespace System\Diagnostics;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait WriteIfInterpolatedStringHandlerOverride {
	/**
	 * @param \System\String|string $visualizerTypeName
	 */
	#[MethodOverride]public function __construct_1 ($visualizerTypeName){}
	/**
	 * @param \System\String|string $visualizerTypeName
	 * @param \System\String|string $visualizerObjectSourceTypeName
	 */
	#[MethodOverride]public function __construct_2 ($visualizerTypeName, $visualizerObjectSourceTypeName){}
	/**
	 * @param \System\String|string $visualizerTypeName
	 * @param \System\Type $visualizerObjectSource
	 */
	#[MethodOverride]public function __construct_3 ($visualizerTypeName, $visualizerObjectSource){}
	/**
	 * @param \System\Type $visualizer
	 */
	#[MethodOverride]public function __construct_4 ($visualizer){}
	/**
	 * @param \System\Type $visualizer
	 * @param \System\Type $visualizerObjectSource
	 */
	#[MethodOverride]public function __construct_5 ($visualizer, $visualizerObjectSource){}
	/**
	 * @param \System\Type $visualizer
	 * @param \System\String|string $visualizerObjectSourceTypeName
	 */
	#[MethodOverride]public function __construct_6 ($visualizer, $visualizerObjectSourceTypeName){}
}
final class DebuggerVisualizerAttribute extends \System\Attribute
{
	use WriteIfInterpolatedStringHandlerOverride;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $VisualizerObjectSourceTypeName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $VisualizerTypeName;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Description;
	/**
	 * @property
	 * @var \System\Type
	 */
	public $Target;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $TargetTypeName;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses DebuggerVisualizerAttributeOverride::__construct_1 <br>public , args: ($visualizerTypeName)<br>
	 * @uses DebuggerVisualizerAttributeOverride::__construct_2 <br>public , args: ($visualizerTypeName, $visualizerObjectSourceTypeName)<br>
	 * @uses DebuggerVisualizerAttributeOverride::__construct_3 <br>public , args: ($visualizerTypeName, $visualizerObjectSource)<br>
	 * @uses DebuggerVisualizerAttributeOverride::__construct_4 <br>public , args: ($visualizer)<br>
	 * @uses DebuggerVisualizerAttributeOverride::__construct_5 <br>public , args: ($visualizer, $visualizerObjectSource)<br>
	 * @uses DebuggerVisualizerAttributeOverride::__construct_6 <br>public , args: ($visualizer, $visualizerObjectSourceTypeName)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}