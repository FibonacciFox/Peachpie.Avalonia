<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FormattableStringMethodsOverride
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
class FormattableString extends \System\Object implements 
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
	 * @return \System\String|string
	 */
	public  function get_Format(){}
	/**
	 * @return \System\Object[]
	 */
	public  function GetArguments(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ArgumentCount(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Object|object
	 */
	public  function GetArgument($index){}
	/**
	 * @uses FormattableStringMethodsOverride::ToString_1 ($formatProvider)
	 * @uses FormattableStringMethodsOverride::ToString_2 ($ignored, $formatProvider)
	 * @uses FormattableStringMethodsOverride::ToString_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @param \System\FormattableString $formattable
	 * @return \System\String|string
	 */
	public static function Invariant($formattable){}
	/**
	 * @param \System\FormattableString $formattable
	 * @return \System\String|string
	 */
	public static function CurrentCulture($formattable){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
