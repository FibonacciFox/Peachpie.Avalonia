<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ComAwareEventInfoOverride {
	/**
	 * @param \System\Runtime\InteropServices\TypeLibVarFlags $flags
	 */
	#[MethodOverride]public function __construct_1 ($flags){}
	/**
	 * @param \System\Int16 $flags
	 */
	#[MethodOverride]public function __construct_2 ($flags){}
}
final class TypeLibVarAttribute extends \System\Attribute
{
	use ComAwareEventInfoOverride;

	/**
	 * @property
	 * @var \System\Runtime\InteropServices\TypeLibVarFlags
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
	 * @uses TypeLibVarAttributeOverride::__construct_1 <br>public , args: ($flags)<br>
	 * @uses TypeLibVarAttributeOverride::__construct_2 <br>public , args: ($flags)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}