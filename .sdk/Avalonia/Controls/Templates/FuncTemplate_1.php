<?php
namespace Avalonia\Controls\Templates;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FuncTemplate_1Override {
	/**
	 * @deprecated
	 * @return \TControl
	 */
	#[MethodOverride]public function Build_1 (){}
	/**
	 * @deprecated
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function Build_2 (){}
}
class FuncTemplate_1 extends \System\Object implements
	\Avalonia\Controls\ITemplate_1,
	\Avalonia\Styling\ITemplate
{
	use FuncTemplate_1Override;


	/**
	 * @uses FuncTemplate_1Override::Build_1 <br>public , args: ()<br>
	 * @uses FuncTemplate_1Override::Build_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \TControl|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function Build (){}
	/**
	 * @param \System\Func_1 $func [generic: TControl]
	 */
	public function __construct($func){}
}