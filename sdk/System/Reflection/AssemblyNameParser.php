<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AssemblyNameParserMethodsOverride
{
	/**
	 * @return \System\Reflection\AssemblyNameParts
	 */
	#[MethodOverride] public static function Parse_1($name){}
	/**
	 * @return \System\Reflection\AssemblyNameParts
	 */
	#[MethodOverride] public static function Parse_2($name){}
	/**
	 * @return \System\Reflection\AssemblyNameParts
	 */
	#[MethodOverride] private  function Parse_3(){}
	/**
	 * @return \System\Reflection\Token
	 */
	#[MethodOverride] private  function GetNextToken_1(){}
	/**
	 * @return \System\Reflection\Token
	 */
	#[MethodOverride] private  function GetNextToken_2($tokenString){}
}
/**
 */
class AssemblyNameParser extends \System\ValueType
{
	/**
	 * @uses AssemblyNameParserMethodsOverride::Parse_1 ($name)
	 * @uses AssemblyNameParserMethodsOverride::Parse_2 ($name)
	 * @uses AssemblyNameParserMethodsOverride::Parse_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Parse(mixed ...$args){}
	/**
	 * @param \System\Reflection\AttributeKind& $seenAttributes
	 * @param \System\Reflection\AttributeKind $newAttribute
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RecordNewSeenOrThrow($seenAttributes, $newAttribute){}
	/**
	 * @param \System\String|string $attributeValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ParseVersion($attributeValue){}
	/**
	 * @param \System\String|string $attributeValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseCulture($attributeValue){}
	/**
	 * @param \System\String|string $attributeValue
	 * @param \System\Boolean $isToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ParsePKT($attributeValue, $isToken){}
	/**
	 * @param \System\String|string $attributeValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ParseProcessorArchitecture($attributeValue){}
	/**
	 * @param \System\Char $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ParseHexNybble($c){}
	/**
	 * @uses AssemblyNameParserMethodsOverride::GetNextToken_1 ()
	 * @uses AssemblyNameParserMethodsOverride::GetNextToken_2 ($tokenString)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetNextToken(mixed ...$args){}
	/**
	 * @param \System\Char $ch
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsWhiteSpace($ch){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetNextChar(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThrowInvalidAssemblyName(){}
}
