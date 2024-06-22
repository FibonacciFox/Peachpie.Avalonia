<?php
namespace Avalonia\Metadata;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SlicedStreamOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_2 ($message){}
}
final class UnstableAttribute extends \System\Attribute
{
	use SlicedStreamOverride;

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Message;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses UnstableAttributeOverride::__construct_1 <br>public , args: ()<br>
	 * @uses UnstableAttributeOverride::__construct_2 <br>public , args: ($message)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}