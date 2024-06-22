<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ComAwareEventInfoOverride {
	/**
	 * @param \System\String|string $name
	 * @param \System\Int32|int $initialThreshold
	 */
	#[MethodOverride]public function __construct_1 ($name, $initialThreshold){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Int32|int $initialThreshold
	 * @param \System\Int32|int $maximumThreshold
	 */
	#[MethodOverride]public function __construct_2 ($name, $initialThreshold, $maximumThreshold){}
}
final class HandleCollector extends \System\Object
{
	use ComAwareEventInfoOverride;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $InitialThreshold;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MaximumThreshold;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @return \System\Void|void
	 */
	public function Add(){}
	/**
	 * @return \System\Void|void
	 */
	public function Remove(){}
	/**
	 * @uses HandleCollectorOverride::__construct_1 <br>public , args: ($name, $initialThreshold)<br>
	 * @uses HandleCollectorOverride::__construct_2 <br>public , args: ($name, $initialThreshold, $maximumThreshold)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}