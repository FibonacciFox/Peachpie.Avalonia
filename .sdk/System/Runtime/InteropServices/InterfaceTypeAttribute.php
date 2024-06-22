<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ExternalExceptionOverride {
	/**
	 * @param \System\Runtime\InteropServices\ComInterfaceType $interfaceType
	 */
	#[MethodOverride]public function __construct_1 ($interfaceType){}
	/**
	 * @param \System\Int16 $interfaceType
	 */
	#[MethodOverride]public function __construct_2 ($interfaceType){}
}
final class InterfaceTypeAttribute extends \System\Attribute
{
	use ExternalExceptionOverride;

	/**
	 * @property
	 * @var \System\Runtime\InteropServices\ComInterfaceType
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
	 * @uses InterfaceTypeAttributeOverride::__construct_1 <br>public , args: ($interfaceType)<br>
	 * @uses InterfaceTypeAttributeOverride::__construct_2 <br>public , args: ($interfaceType)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}