<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ContainerOverride {
	/**
	 * @param \System\Byte $scale
	 * @param \System\Byte $sign
	 * @param \System\UInt32 $hi
	 * @param \System\UInt32 $mid
	 * @param \System\UInt32 $low
	 */
	#[MethodOverride]public function __construct_1 ($scale, $sign, $hi, $mid, $low){}
	/**
	 * @param \System\Byte $scale
	 * @param \System\Byte $sign
	 * @param \System\Int32|int $hi
	 * @param \System\Int32|int $mid
	 * @param \System\Int32|int $low
	 */
	#[MethodOverride]public function __construct_2 ($scale, $sign, $hi, $mid, $low){}
}
final class DecimalConstantAttribute extends \System\Attribute
{
	use ContainerOverride;
	/**
	 * @property
	 * @var \System\Decimal
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses DecimalConstantAttributeOverride::__construct_1 <br>public , args: ($scale, $sign, $hi, $mid, $low)<br>
	 * @uses DecimalConstantAttributeOverride::__construct_2 <br>public , args: ($scale, $sign, $hi, $mid, $low)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}