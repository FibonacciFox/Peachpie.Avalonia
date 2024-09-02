<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait COMExceptionOverride {
	/**
	 * @param \System\String|string $sourceInterfaces
	 */
	#[MethodOverride]public function __construct_1 ($sourceInterfaces){}
	/**
	 * @param \System\Type $sourceInterface
	 */
	#[MethodOverride]public function __construct_2 ($sourceInterface){}
	/**
	 * @param \System\Type $sourceInterface1
	 * @param \System\Type $sourceInterface2
	 */
	#[MethodOverride]public function __construct_3 ($sourceInterface1, $sourceInterface2){}
	/**
	 * @param \System\Type $sourceInterface1
	 * @param \System\Type $sourceInterface2
	 * @param \System\Type $sourceInterface3
	 */
	#[MethodOverride]public function __construct_4 ($sourceInterface1, $sourceInterface2, $sourceInterface3){}
	/**
	 * @param \System\Type $sourceInterface1
	 * @param \System\Type $sourceInterface2
	 * @param \System\Type $sourceInterface3
	 * @param \System\Type $sourceInterface4
	 */
	#[MethodOverride]public function __construct_5 ($sourceInterface1, $sourceInterface2, $sourceInterface3, $sourceInterface4){}
}
final class ComSourceInterfacesAttribute extends \System\Attribute
{
	use COMExceptionOverride;
	/**
	 * @property
	 * @var \System\String|string
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
	 * @uses ComSourceInterfacesAttributeOverride::__construct_1 <br>public , args: ($sourceInterfaces)<br>
	 * @uses ComSourceInterfacesAttributeOverride::__construct_2 <br>public , args: ($sourceInterface)<br>
	 * @uses ComSourceInterfacesAttributeOverride::__construct_3 <br>public , args: ($sourceInterface1, $sourceInterface2)<br>
	 * @uses ComSourceInterfacesAttributeOverride::__construct_4 <br>public , args: ($sourceInterface1, $sourceInterface2, $sourceInterface3)<br>
	 * @uses ComSourceInterfacesAttributeOverride::__construct_5 <br>public , args: ($sourceInterface1, $sourceInterface2, $sourceInterface3, $sourceInterface4)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}