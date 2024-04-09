<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ComAwareEventInfoOverride {
	/**
	 * @param \System\Int16 $implType
	 */
	#[MethodOverride]public function __construct_1 ($implType){}
	/**
	 * @param \System\Runtime\InteropServices\IDispatchImplType $implType
	 */
	#[MethodOverride]public function __construct_2 ($implType){}
}
final class IDispatchImplAttribute extends \System\Attribute
{
	use ComAwareEventInfoOverride;
	/**
	 * @property
	 * @var \System\Runtime\InteropServices\IDispatchImplType
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
	 * @uses IDispatchImplAttributeOverride::__construct_1 <br>public , args: ($implType)<br>
	 * @uses IDispatchImplAttributeOverride::__construct_2 <br>public , args: ($implType)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}