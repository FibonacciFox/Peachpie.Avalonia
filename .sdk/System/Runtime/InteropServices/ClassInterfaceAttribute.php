<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ArrayWithOffsetOverride {
	/**
	 * @param \System\Runtime\InteropServices\ClassInterfaceType $classInterfaceType
	 */
	#[MethodOverride]public function __construct_1 ($classInterfaceType){}
	/**
	 * @param \System\Int16 $classInterfaceType
	 */
	#[MethodOverride]public function __construct_2 ($classInterfaceType){}
}
final class ClassInterfaceAttribute extends \System\Attribute
{
	use ArrayWithOffsetOverride;

	/**
	 * @property
	 * @var \System\Runtime\InteropServices\ClassInterfaceType
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
	 * @uses ClassInterfaceAttributeOverride::__construct_1 <br>public , args: ($classInterfaceType)<br>
	 * @uses ClassInterfaceAttributeOverride::__construct_2 <br>public , args: ($classInterfaceType)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}