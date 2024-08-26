<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TypeNameParserOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $typeName
	 * @param \System\Func_2 $assemblyResolver [generic: System\Reflection\AssemblyName,System\Reflection\Assembly]
	 * @param \System\Func_4 $typeResolver [generic: System\Reflection\Assembly,System\String,System\Boolean,System\Type]
	 * @param \System\Boolean|bool $throwOnError
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Threading\StackCrawlMark& $stackMark
	 * @return \System\Type
	 */
	#[MethodOverride]protected static function GetType_1 ($typeName, $assemblyResolver, $typeResolver, $throwOnError, $ignoreCase, $stackMark){}
}
final class TypeNameParser extends \System\Object implements
	\System\IDisposable
{
	use TypeNameParserOverride;

	private static function _CreateTypeNameParser($typeName, $retHandle, $throwOnError){}
	private static function _GetNames($pTypeNameParser, $retArray){}
	private static function _GetTypeArguments($pTypeNameParser, $retArray){}
	private static function _GetModifiers($pTypeNameParser, $retArray){}
	private static function _GetAssemblyName($pTypeNameParser, $retString){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	private function ConstructType($assemblyResolver, $typeResolver, $throwOnError, $ignoreCase, $stackMark){}
	private static function ResolveAssembly($asmName, $assemblyResolver, $throwOnError, $stackMark){}
	private static function ResolveType($assembly, $names, $typeResolver, $throwOnError, $ignoreCase, $stackMark){}
	private static function EscapeTypeName($name){}
	private static function CreateTypeNameParser($typeName, $throwOnError){}
	private function GetNames(){}
	private function GetTypeArguments(){}
	private function GetModifiers(){}
	private function GetAssemblyName(){}
}