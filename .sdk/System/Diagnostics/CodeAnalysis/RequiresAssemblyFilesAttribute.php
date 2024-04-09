<?php
namespace System\Diagnostics\CodeAnalysis;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ContractOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_2 ($message){}
}
final class RequiresAssemblyFilesAttribute extends \System\Attribute
{
	use ContractOverride;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Message;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Url;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses RequiresAssemblyFilesAttributeOverride::__construct_1 <br>public , args: ()<br>
	 * @uses RequiresAssemblyFilesAttributeOverride::__construct_2 <br>public , args: ($message)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}