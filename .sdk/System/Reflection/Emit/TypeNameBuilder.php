<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TypeNameBuilderOverride {
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Reflection\Emit\TypeNameBuilder+Format $format
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function ToString_1 ($type, $format){}
	/**
	 * @deprecated
	 * @param \System\String|string $pStr
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Append_1 ($pStr){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Append_2 ($c){}
}
final class TypeNameBuilder extends \System\Object
{
	use TypeNameBuilderOverride;

	private function OpenGenericArguments(){}
	private function CloseGenericArguments(){}
	private function OpenGenericArgument(){}
	private function CloseGenericArgument(){}
	private function AddName($name){}
	private function AddArray($rank){}
	private function AddAssemblySpec($assemblySpec){}
	private static function ContainsReservedChar($name){}
	private static function IsTypeNameReservedChar($ch){}
	private function EscapeName($name){}
	private function EscapeAssemblyName($name){}
	private function EscapeEmbeddedAssemblyName($name){}
	private function PushOpenGenericArgument(){}
	private function PopOpenGenericArgument(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses TypeNameBuilderOverride::Append_1 <br>private , args: ($pStr)<br>
	 * @uses TypeNameBuilderOverride::Append_2 <br>private , args: ($c)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function Append (\override ...$args){}
	private function AddElementType($type){}
	private function AddAssemblyQualifiedName($type, $format){}
}