<?php
namespace Avalonia\Controls\Metadata;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TemplateResult_1Override {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Type $type
	 */
	#[MethodOverride]public function __construct_2 ($name, $type){}
}
final class TemplatePartAttribute extends \System\Attribute
{
	use TemplateResult_1Override;

	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Type
	 */
	public $Type;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses TemplatePartAttributeOverride::__construct_1 <br>public , args: ()<br>
	 * @uses TemplatePartAttributeOverride::__construct_2 <br>public , args: ($name, $type)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}