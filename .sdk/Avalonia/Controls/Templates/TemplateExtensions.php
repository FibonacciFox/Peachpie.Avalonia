<?php
namespace Avalonia\Controls\Templates;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TemplateExtensionsOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\Primitives\TemplatedControl $control
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function GetTemplateChildren_1 ($control){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Controls\Primitives\TemplatedControl $templatedParent
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]private static function GetTemplateChildren_2 ($control, $templatedParent){}
}
class TemplateExtensions extends \System\Object
{
	use TemplateExtensionsOverride;


	/**
	 * @uses TemplateExtensionsOverride::GetTemplateChildren_1 <br>public , args: ($control)<br>
	 * @uses TemplateExtensionsOverride::GetTemplateChildren_2 <br>private , args: ($control, $templatedParent)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetTemplateChildren (\override ...$args){}
}