<?php
namespace Avalonia\Controls\Templates;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TemplateResult_1Override {
	/**
	 * @deprecated
	 * @return \T|object
	 */
	#[MethodOverride]public function get_Result_1 (){}
	/**
	 * @deprecated
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function get_Result_2 (){}
}
class TemplateResult_1 extends \System\Object implements
	\Avalonia\Controls\Templates\ITemplateResult
{
	use TemplateResult_1Override;

	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Result;
	/**
	 * @property
	 * @var \Avalonia\Controls\INameScope
	 * @since readonly
	 */
	public $NameScope;
	/**
	 * @uses TemplateResult_1Override::get_Result_1 <br>public , args: ()<br>
	 * @uses TemplateResult_1Override::get_Result_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_Result (){}
	/**
	 * @param \T& &$result
	 * @param \Avalonia\Controls\INameScope& &$scope
	 * @return \System\Void|void
	 */
	public function Deconstruct(&$result, &$scope){}
	/**
	 * @param \T|object $result
	 * @param \Avalonia\Controls\INameScope $nameScope
	 */
	public function __construct($result, $nameScope){}
}