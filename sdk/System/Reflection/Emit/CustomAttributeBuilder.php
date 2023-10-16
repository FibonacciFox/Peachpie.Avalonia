<?php
namespace System\Reflection\Emit;
/**
 */
class CustomAttributeBuilder extends \System\Object
{
	/**
	 * @var \System\Reflection\ConstructorInfo
	 * @field
	 */
	protected $m_con;
	/**
	 * @param \System\Type $t
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ValidateType($t){}
	/**
	 * @param \System\Type $type
	 * @param \System\Type $passedType
	 * @param \System\String|string $paramName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function VerifyTypeAndPassedObjectType($type, $passedType, $paramName){}
	/**
	 * @param \System\IO\BinaryWriter $writer
	 * @param \System\Type $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EmitType($writer, $type){}
	/**
	 * @param \System\IO\BinaryWriter $writer
	 * @param \System\String|string $str
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EmitString($writer, $str){}
	/**
	 * @param \System\IO\BinaryWriter $writer
	 * @param \System\Type $type
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EmitValue($writer, $type, $value){}
	/**
	 * @param \System\Reflection\Emit\ModuleBuilder $mod
	 * @param \System\Int32|int $tkOwner
	 * @return \System\Void|void
	 */
	protected  function CreateCustomAttribute($mod, $tkOwner){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
