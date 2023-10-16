<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TypeNameBuilderMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function ToString_2($type, $format){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Append_1($pStr){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Append_2($c){}
}
/**
 */
class TypeNameBuilder extends \System\Object
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OpenGenericArguments(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CloseGenericArguments(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OpenGenericArgument(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CloseGenericArgument(){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddName($name){}
	/**
	 * @param \System\Int32|int $rank
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddArray($rank){}
	/**
	 * @param \System\String|string $assemblySpec
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddAssemblySpec($assemblySpec){}
	/**
	 * @uses TypeNameBuilderMethodsOverride::ToString_1 ()
	 * @uses TypeNameBuilderMethodsOverride::ToString_2 ($type, $format)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToString(mixed ...$args){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ContainsReservedChar($name){}
	/**
	 * @param \System\Char $ch
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsTypeNameReservedChar($ch){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EscapeName($name){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EscapeAssemblyName($name){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EscapeEmbeddedAssemblyName($name){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PushOpenGenericArgument(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopOpenGenericArgument(){}
	/**
	 * @uses TypeNameBuilderMethodsOverride::Append_1 ($pStr)
	 * @uses TypeNameBuilderMethodsOverride::Append_2 ($c)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Append(mixed ...$args){}
	/**
	 * @param \System\Type $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddElementType($type){}
	/**
	 * @param \System\Type $type
	 * @param \System\Reflection\Emit\Format $format
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddAssemblyQualifiedName($type, $format){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
