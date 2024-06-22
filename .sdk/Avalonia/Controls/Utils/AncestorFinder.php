<?php
namespace Avalonia\Controls\Utils;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AncestorFinderOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\StyledElement $control
	 * @return \System\IObservable_1
	 */
	#[MethodOverride]public static function Create_1 ($control){}
	/**
	 * @deprecated
	 * @param \Avalonia\StyledElement $control
	 * @param \System\Type $ancestorType
	 * @return \System\IObservable_1
	 */
	#[MethodOverride]public static function Create_2 ($control, $ancestorType){}
}
class AncestorFinder extends \System\Object
{
	use AncestorFinderOverride;


	/**
	 * @uses AncestorFinderOverride::Create_1 <br>public , args: ($control)<br>
	 * @uses AncestorFinderOverride::Create_2 <br>public , args: ($control, $ancestorType)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IObservable_1|mixed|\override
	 */
	#[MethodOverridePublic]function Create (\override ...$args){}
}