<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ConcreteFormattableStringMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1($formatProvider){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function ToString_2($ignored, $formatProvider){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_3(){}
}
/**
 */
class ConcreteFormattableString extends \System\FormattableString implements 
	\System\IFormattable
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Format;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ArgumentCount;
	/**
	 * @uses ConcreteFormattableStringMethodsOverride::ToString_1 ($formatProvider)
	 * @uses ConcreteFormattableStringMethodsOverride::ToString_2 ($ignored, $formatProvider)
	 * @uses ConcreteFormattableStringMethodsOverride::ToString_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
}
