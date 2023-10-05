<?php
namespace Avalonia\PropertyStore;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait UncommonFieldsMethodsOverride
{
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_1(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Finalize_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Finalize_2(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_2(){}
}
/**
 */
class UncommonFields extends \System\Object
{
	/**
	 * @var \TValue
	 * @field
	 */
	public $_defaultValue;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $_isDefaultValueInitialized;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $_hasDataValidation;
	/**
	 * @var \Avalonia\Data\BindingValueType
	 * @field
	 */
	public $_dataValidationState;
	/**
	 * @var \System\Exception
	 * @field
	 */
	public $_dataValidationError;
	/**
	 * @var \System\Func_3[Avalonia\AvaloniaObject,T,T]
	 * @field
	 */
	public $_coerce;
	/**
	 * @var \T
	 * @field
	 */
	public $_uncoercedValue;
	/**
	 * @var \T
	 * @field
	 */
	public $_uncoercedBaseValue;
	/**
	 * @uses UncommonFieldsMethodsOverride::GetType_1 ()
	 * @uses UncommonFieldsMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @uses UncommonFieldsMethodsOverride::MemberwiseClone_1 ()
	 * @uses UncommonFieldsMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
	/**
	 * @uses UncommonFieldsMethodsOverride::Finalize_1 ()
	 * @uses UncommonFieldsMethodsOverride::Finalize_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Finalize(mixed ...$args){}
	/**
	 * @uses UncommonFieldsMethodsOverride::ToString_1 ()
	 * @uses UncommonFieldsMethodsOverride::ToString_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @uses UncommonFieldsMethodsOverride::Equals_1 ($obj)
	 * @uses UncommonFieldsMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses UncommonFieldsMethodsOverride::GetHashCode_1 ()
	 * @uses UncommonFieldsMethodsOverride::GetHashCode_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
}
