<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StringInfoMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function SubstringByTextElements_1($startingTextElement){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function SubstringByTextElements_2($startingTextElement, $lengthInTextElements){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GetNextTextElement_1($str){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GetNextTextElement_2($str, $index){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function GetNextTextElementLength_1($str){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function GetNextTextElementLength_2($str, $index){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function GetNextTextElementLength_3($str){}
	/**
	 * @return \System\Globalization\TextElementEnumerator
	 */
	#[MethodOverride] public static function GetTextElementEnumerator_1($str){}
	/**
	 * @return \System\Globalization\TextElementEnumerator
	 */
	#[MethodOverride] public static function GetTextElementEnumerator_2($str, $index){}
}
/**
 */
class StringInfo extends \System\Object
{
	/**
	 * @var \System\String
	 * @property
	 */
	public $String;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $LengthInTextElements;
	/**
	 * @param \System\Object|object $value
	 * @return \System\Boolean
	 */
	public  function Equals($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Indexes(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_String(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_String($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_LengthInTextElements(){}
	/**
	 * @uses StringInfoMethodsOverride::SubstringByTextElements_1 ($startingTextElement)
	 * @uses StringInfoMethodsOverride::SubstringByTextElements_2 ($startingTextElement, $lengthInTextElements)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SubstringByTextElements(mixed ...$args){}
	/**
	 * @uses StringInfoMethodsOverride::GetNextTextElement_1 ($str)
	 * @uses StringInfoMethodsOverride::GetNextTextElement_2 ($str, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetNextTextElement(mixed ...$args){}
	/**
	 * @uses StringInfoMethodsOverride::GetNextTextElementLength_1 ($str)
	 * @uses StringInfoMethodsOverride::GetNextTextElementLength_2 ($str, $index)
	 * @uses StringInfoMethodsOverride::GetNextTextElementLength_3 ($str)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetNextTextElementLength(mixed ...$args){}
	/**
	 * @uses StringInfoMethodsOverride::GetTextElementEnumerator_1 ($str)
	 * @uses StringInfoMethodsOverride::GetTextElementEnumerator_2 ($str, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetTextElementEnumerator(mixed ...$args){}
	/**
	 * @param \System\String|string $str
	 * @return \System\Int32[]
	 */
	public static function ParseCombiningCharacters($str){}
}
