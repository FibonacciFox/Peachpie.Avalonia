<?php
namespace System\Diagnostics\Contracts;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ContractExceptionOverride {
	/**
	 * @param \System\String|string $category
	 * @param \System\String|string $setting
	 * @param \System\Boolean|bool $enabled
	 */
	#[MethodOverride]public function __construct_1 ($category, $setting, $enabled){}
	/**
	 * @param \System\String|string $category
	 * @param \System\String|string $setting
	 * @param \System\String|string $value
	 */
	#[MethodOverride]public function __construct_2 ($category, $setting, $value){}
}
final class ContractOptionAttribute extends \System\Attribute
{
	use ContractExceptionOverride;

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Category;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Setting;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $Enabled;
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
	 * @uses ContractOptionAttributeOverride::__construct_1 <br>public , args: ($category, $setting, $enabled)<br>
	 * @uses ContractOptionAttributeOverride::__construct_2 <br>public , args: ($category, $setting, $value)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}