<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TokenParserMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryConsume_1($c){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryConsume_2($s){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryParseIdentifier_1($extraValidChars, $res){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryParseIdentifier_2($res){}
}
/**
 */
class TokenParser extends \System\ValueType
{
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Position(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Position($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function SkipWhitespace(){}
	/**
	 * @return \System\Boolean
	 */
	public  function NextIsWhitespace(){}
	/**
	 * @param \System\Char $ch
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsAlphaNumeric($ch){}
	/**
	 * @uses TokenParserMethodsOverride::TryConsume_1 ($c)
	 * @uses TokenParserMethodsOverride::TryConsume_2 ($s)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TryConsume(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $chars
	 * @param \System\Char& $token
	 * @return \System\Boolean
	 */
	public  function TryConsumeAny($chars, $token){}
	/**
	 * @param \System\String|string $keyword
	 * @return \System\Boolean
	 */
	public  function TryParseKeyword($keyword){}
	/**
	 * @param \System\String|string $keywordInLowerCase
	 * @return \System\Boolean
	 */
	public  function TryParseKeywordLowerCase($keywordInLowerCase){}
	/**
	 * @param \System\Int32|int $c
	 * @return \System\Void|void
	 */
	public  function Advance($c){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @uses TokenParserMethodsOverride::TryParseIdentifier_1 ($extraValidChars, $res)
	 * @uses TokenParserMethodsOverride::TryParseIdentifier_2 ($res)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TryParseIdentifier(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1& $res
	 * @return \System\Boolean
	 */
	public  function TryParseCall($res){}
	/**
	 * @param \System\Single& $res
	 * @return \System\Boolean
	 */
	public  function TryParseFloat($res){}
	/**
	 * @param \System\Double& $res
	 * @return \System\Boolean
	 */
	public  function TryParseDouble($res){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsEofWithWhitespace(){}
}
