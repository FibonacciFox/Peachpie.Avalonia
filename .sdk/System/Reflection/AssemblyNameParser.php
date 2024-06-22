<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AssemblyNameParserOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\Reflection\AssemblyNameParser
	 */
	#[MethodOverride]public static function Parse_1 ($name){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $name [generic: System\Char]
	 * @return \System\Reflection\AssemblyNameParser
	 */
	#[MethodOverride]public static function Parse_2 ($name){}
	/**
	 * @deprecated
	 * @return \System\Reflection\AssemblyNameParser
	 */
	#[MethodOverride]private function Parse_3 (){}
	/**
	 * @deprecated
	 * @return \System\Reflection\AssemblyNameParser
	 */
	#[MethodOverride]private function GetNextToken_1 (){}
	/**
	 * @deprecated
	 * @param \System\String& &$tokenString
	 * @return \System\Reflection\AssemblyNameParser
	 */
	#[MethodOverride]private function GetNextToken_2 (&$tokenString){}
}
final class AssemblyNameParser extends \System\ValueType
{
	use AssemblyNameParserOverride;


	/**
	 * @uses AssemblyNameParserOverride::Parse_1 <br>public , args: ($name)<br>
	 * @uses AssemblyNameParserOverride::Parse_2 <br>public , args: ($name)<br>
	 * @uses AssemblyNameParserOverride::Parse_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\AssemblyNameParser|mixed|\override
	 */
	#[MethodOverridePublic]function Parse (\override ...$args){}
	private function RecordNewSeenOrThrow($seenAttributes, $newAttribute){}
	private function ParseVersion($attributeValue){}
	private static function ParseCulture($attributeValue){}
	private function ParsePKT($attributeValue, $isToken){}
	private function ParseProcessorArchitecture($attributeValue){}
	private function ParseHexNybble($c){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses AssemblyNameParserOverride::GetNextToken_1 <br>private , args: ()<br>
	 * @uses AssemblyNameParserOverride::GetNextToken_2 <br>private , args: (&$tokenString)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\AssemblyNameParser|mixed|\override
	 */
	#[MethodOverridePrivate]function GetNextToken (\override ...$args){}
	private static function IsWhiteSpace($ch){}
	private function GetNextChar(){}
	private function ThrowInvalidAssemblyName(){}
}