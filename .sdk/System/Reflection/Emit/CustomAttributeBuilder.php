<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ConstructorBuilderOverride {
	/**
	 * @param \System\Reflection\ConstructorInfo $con
	 * @param \System\Object $constructorArgs
	 */
	#[MethodOverride]public function __construct_1 ($con, $constructorArgs){}
	/**
	 * @param \System\Reflection\ConstructorInfo $con
	 * @param \System\Object $constructorArgs
	 * @param \System\Reflection\PropertyInfo $namedProperties
	 * @param \System\Object $propertyValues
	 */
	#[MethodOverride]public function __construct_2 ($con, $constructorArgs, $namedProperties, $propertyValues){}
	/**
	 * @param \System\Reflection\ConstructorInfo $con
	 * @param \System\Object $constructorArgs
	 * @param \System\Reflection\FieldInfo $namedFields
	 * @param \System\Object $fieldValues
	 */
	#[MethodOverride]public function __construct_3 ($con, $constructorArgs, $namedFields, $fieldValues){}
	/**
	 * @param \System\Reflection\ConstructorInfo $con
	 * @param \System\Object $constructorArgs
	 * @param \System\Reflection\PropertyInfo $namedProperties
	 * @param \System\Object $propertyValues
	 * @param \System\Reflection\FieldInfo $namedFields
	 * @param \System\Object $fieldValues
	 */
	#[MethodOverride]public function __construct_4 ($con, $constructorArgs, $namedProperties, $propertyValues, $namedFields, $fieldValues){}
}
class CustomAttributeBuilder extends \System\Object
{
	use ConstructorBuilderOverride;

	/**
	 * @field
	 * @var \System\Reflection\ConstructorInfo
	 */
	protected $m_con;
	private function ValidateType($t){}
	private static function VerifyTypeAndPassedObjectType($type, $passedType, $paramName){}
	private static function EmitType($writer, $type){}
	private static function EmitString($writer, $str){}
	private static function EmitValue($writer, $type, $value){}
	/**
	 * @param \System\Reflection\Emit\ModuleBuilder $mod
	 * @param \System\Int32|int $tkOwner
	 * @return \System\Void|void
	 */
	protected function CreateCustomAttribute($mod, $tkOwner){}
	/**
	 * @uses CustomAttributeBuilderOverride::__construct_1 <br>public , args: ($con, $constructorArgs)<br>
	 * @uses CustomAttributeBuilderOverride::__construct_2 <br>public , args: ($con, $constructorArgs, $namedProperties, $propertyValues)<br>
	 * @uses CustomAttributeBuilderOverride::__construct_3 <br>public , args: ($con, $constructorArgs, $namedFields, $fieldValues)<br>
	 * @uses CustomAttributeBuilderOverride::__construct_4 <br>public , args: ($con, $constructorArgs, $namedProperties, $propertyValues, $namedFields, $fieldValues)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}