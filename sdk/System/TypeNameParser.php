<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TypeNameParserMethodsOverride
{
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] protected static function GetType_1($typeName, $assemblyResolver, $typeResolver, $throwOnError, $ignoreCase, $stackMark){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2(){}
}
/**
 */
class TypeNameParser extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @param \System\String|string $typeName
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $retHandle
	 * @param \System\Boolean $throwOnError
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _CreateTypeNameParser($typeName, $retHandle, $throwOnError){}
	/**
	 * @param \System\SafeTypeNameParserHandle $pTypeNameParser
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $retArray
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _GetNames($pTypeNameParser, $retArray){}
	/**
	 * @param \System\SafeTypeNameParserHandle $pTypeNameParser
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $retArray
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _GetTypeArguments($pTypeNameParser, $retArray){}
	/**
	 * @param \System\SafeTypeNameParserHandle $pTypeNameParser
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $retArray
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _GetModifiers($pTypeNameParser, $retArray){}
	/**
	 * @param \System\SafeTypeNameParserHandle $pTypeNameParser
	 * @param \System\Runtime\CompilerServices\StringHandleOnStack $retString
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _GetAssemblyName($pTypeNameParser, $retString){}
	/**
	 * @uses TypeNameParserMethodsOverride::GetType_1 ($typeName, $assemblyResolver, $typeResolver, $throwOnError, $ignoreCase, $stackMark)
	 * @uses TypeNameParserMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Func_2 $assemblyResolver
	 * @param \System\Func_4 $typeResolver
	 * @param \System\Boolean $throwOnError
	 * @param \System\Boolean $ignoreCase
	 * @param \System\Threading\StackCrawlMark& $stackMark
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConstructType($assemblyResolver, $typeResolver, $throwOnError, $ignoreCase, $stackMark){}
	/**
	 * @param \System\String|string $asmName
	 * @param \System\Func_2 $assemblyResolver
	 * @param \System\Boolean $throwOnError
	 * @param \System\Threading\StackCrawlMark& $stackMark
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ResolveAssembly($asmName, $assemblyResolver, $throwOnError, $stackMark){}
	/**
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\String[] $names
	 * @param \System\Func_4 $typeResolver
	 * @param \System\Boolean $throwOnError
	 * @param \System\Boolean $ignoreCase
	 * @param \System\Threading\StackCrawlMark& $stackMark
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ResolveType($assembly, $names, $typeResolver, $throwOnError, $ignoreCase, $stackMark){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EscapeTypeName($name){}
	/**
	 * @param \System\String|string $typeName
	 * @param \System\Boolean $throwOnError
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateTypeNameParser($typeName, $throwOnError){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetNames(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTypeArguments(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetModifiers(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetAssemblyName(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
