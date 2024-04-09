<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait InputExtensionsOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \Avalonia\Point $p
	 * @return \Avalonia\Input\IInputElement
	 */
	#[MethodOverride]public static function InputHitTest_1 ($element, $p){}
	/**
	 * @deprecated
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \Avalonia\Point $p
	 * @param \System\Func_2 $filter [generic: Avalonia\Visual,System\Boolean]
	 * @return \Avalonia\Input\IInputElement
	 */
	#[MethodOverride]public static function InputHitTest_2 ($element, $p, $filter){}
}
class InputExtensions extends \System\Object
{
	use InputExtensionsOverride;

	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \Avalonia\Point $p
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\Input\IInputElement]
	 */
	public static function GetInputElementsAt($element, $p){}
	/**
	 * @uses InputExtensionsOverride::InputHitTest_1 <br>public , args: ($element, $p)<br>
	 * @uses InputExtensionsOverride::InputHitTest_2 <br>public , args: ($element, $p, $filter)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Input\IInputElement|mixed|\override
	 */
	#[MethodOverridePublic]function InputHitTest (\override ...$args){}
	private static function IsHitTestVisible($visual){}
}