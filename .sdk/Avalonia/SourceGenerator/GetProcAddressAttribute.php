<?php
namespace Avalonia\SourceGenerator;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait VisualOverride {
	/**
	 * @param \System\String|string $proc
	 */
	#[MethodOverride]public function __construct_1 ($proc){}
	/**
	 * @param \System\String|string $proc
	 * @param \System\Boolean|bool $optional
	 */
	#[MethodOverride]public function __construct_2 ($proc, $optional){}
	/**
	 * @param \System\Boolean|bool $optional
	 */
	#[MethodOverride]public function __construct_3 ($optional){}
	/**
	 */
	#[MethodOverride]public function __construct_4 (){}
}
final class GetProcAddressAttribute extends \System\Attribute
{
	use VisualOverride;

	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses GetProcAddressAttributeOverride::__construct_1 <br>public , args: ($proc)<br>
	 * @uses GetProcAddressAttributeOverride::__construct_2 <br>public , args: ($proc, $optional)<br>
	 * @uses GetProcAddressAttributeOverride::__construct_3 <br>public , args: ($optional)<br>
	 * @uses GetProcAddressAttributeOverride::__construct_4 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}