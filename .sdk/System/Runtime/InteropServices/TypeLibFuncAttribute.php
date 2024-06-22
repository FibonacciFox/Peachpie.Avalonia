<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ComAwareEventInfoOverride {
	/**
	 * @param \System\Runtime\InteropServices\TypeLibFuncFlags $flags
	 */
	#[MethodOverride]public function __construct_1 ($flags){}
	/**
	 * @param \System\Int16 $flags
	 */
	#[MethodOverride]public function __construct_2 ($flags){}
}
final class TypeLibFuncAttribute extends \System\Attribute
{
	use ComAwareEventInfoOverride;

	/**
	 * @property
	 * @var \System\Runtime\InteropServices\TypeLibFuncFlags
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
	 * @uses TypeLibFuncAttributeOverride::__construct_1 <br>public , args: ($flags)<br>
	 * @uses TypeLibFuncAttributeOverride::__construct_2 <br>public , args: ($flags)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}