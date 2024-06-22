<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ComAwareEventInfoOverride {
	/**
	 * @param \System\Byte $
	 */
	#[MethodOverride]public function __construct_1 ($){}
	/**
	 * @param \System\Byte $
	 */
	#[MethodOverride]public function __construct_2 ($){}
}
final class NullableAttribute extends \System\Attribute
{
	use ComAwareEventInfoOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Byte[]
	 */
	public $NullableFlags;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses NullableAttributeOverride::__construct_1 <br>public , args: ($)<br>
	 * @uses NullableAttributeOverride::__construct_2 <br>public , args: ($)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}