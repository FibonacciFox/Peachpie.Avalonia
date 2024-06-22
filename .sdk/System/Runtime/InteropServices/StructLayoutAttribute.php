<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SEHExceptionOverride {
	/**
	 * @param \System\Runtime\InteropServices\LayoutKind $layoutKind
	 */
	#[MethodOverride]public function __construct_1 ($layoutKind){}
	/**
	 * @param \System\Int16 $layoutKind
	 */
	#[MethodOverride]public function __construct_2 ($layoutKind){}
}
final class StructLayoutAttribute extends \System\Attribute
{
	use SEHExceptionOverride;

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $Pack;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $Size;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\CharSet
	 */
	public $CharSet;
	/**
	 * @property
	 * @var \System\Runtime\InteropServices\LayoutKind
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
	 * @uses StructLayoutAttributeOverride::__construct_1 <br>public , args: ($layoutKind)<br>
	 * @uses StructLayoutAttributeOverride::__construct_2 <br>public , args: ($layoutKind)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}