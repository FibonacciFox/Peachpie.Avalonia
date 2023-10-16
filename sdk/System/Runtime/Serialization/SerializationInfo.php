<?php
namespace System\Runtime\Serialization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SerializationInfoMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddValue_1($name, $value, $type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddValue_2($name, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddValue_3($name, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddValue_4($name, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddValue_5($name, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddValue_6($name, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddValue_7($name, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddValue_8($name, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddValue_9($name, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddValue_10($name, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddValue_11($name, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddValue_12($name, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddValue_13($name, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddValue_14($name, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddValue_15($name, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddValue_16($name, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function ThrowIfDeserializationInProgress_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function ThrowIfDeserializationInProgress_2($switchSuffix, $cachedValue){}
}
/**
 */
class SerializationInfo extends \System\Object
{
	/**
	 * @var \System\String
	 * @property
	 */
	public $FullTypeName;
	/**
	 * @var \System\String
	 * @property
	 */
	public $AssemblyName;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsFullTypeNameSetExplicit;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsAssemblyNameSetExplicit;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MemberCount;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $ObjectType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $DeserializationInProgress;
	/**
	 * @return \System\String|string
	 */
	public  function get_FullTypeName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_FullTypeName($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_AssemblyName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_AssemblyName($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFullTypeNameSetExplicit(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_IsFullTypeNameSetExplicit($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAssemblyNameSetExplicit(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_IsAssemblyNameSetExplicit($value){}
	/**
	 * @param \System\Type $type
	 * @return \System\Void|void
	 */
	public  function SetType($type){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MemberCount(){}
	/**
	 * @return \System\Type
	 */
	public  function get_ObjectType(){}
	/**
	 * @return \System\Runtime\Serialization\SerializationInfoEnumerator
	 */
	public  function GetEnumerator(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExpandArrays(){}
	/**
	 * @uses SerializationInfoMethodsOverride::AddValue_1 ($name, $value, $type)
	 * @uses SerializationInfoMethodsOverride::AddValue_2 ($name, $value)
	 * @uses SerializationInfoMethodsOverride::AddValue_3 ($name, $value)
	 * @uses SerializationInfoMethodsOverride::AddValue_4 ($name, $value)
	 * @uses SerializationInfoMethodsOverride::AddValue_5 ($name, $value)
	 * @uses SerializationInfoMethodsOverride::AddValue_6 ($name, $value)
	 * @uses SerializationInfoMethodsOverride::AddValue_7 ($name, $value)
	 * @uses SerializationInfoMethodsOverride::AddValue_8 ($name, $value)
	 * @uses SerializationInfoMethodsOverride::AddValue_9 ($name, $value)
	 * @uses SerializationInfoMethodsOverride::AddValue_10 ($name, $value)
	 * @uses SerializationInfoMethodsOverride::AddValue_11 ($name, $value)
	 * @uses SerializationInfoMethodsOverride::AddValue_12 ($name, $value)
	 * @uses SerializationInfoMethodsOverride::AddValue_13 ($name, $value)
	 * @uses SerializationInfoMethodsOverride::AddValue_14 ($name, $value)
	 * @uses SerializationInfoMethodsOverride::AddValue_15 ($name, $value)
	 * @uses SerializationInfoMethodsOverride::AddValue_16 ($name, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddValue(mixed ...$args){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Object|object $value
	 * @param \System\Type $type
	 * @return \System\Void|void
	 */
	protected  function AddValueInternal($name, $value, $type){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Object|object $value
	 * @param \System\Type $type
	 * @return \System\Void|void
	 */
	public  function UpdateValue($name, $value, $type){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FindElement($name){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Type& $foundType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetElement($name, $foundType){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Type& $foundType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetElementNoThrow($name, $foundType){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Type $type
	 * @return \System\Object|object
	 */
	public  function GetValue($name, $type){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Type $type
	 * @return \System\Object|object
	 */
	protected  function GetValueNoThrow($name, $type){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Boolean
	 */
	public  function GetBoolean($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Char
	 */
	public  function GetChar($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\SByte
	 */
	public  function GetSByte($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Byte
	 */
	public  function GetByte($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Int16
	 */
	public  function GetInt16($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\UInt16
	 */
	public  function GetUInt16($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Int32|int
	 */
	public  function GetInt32($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\UInt32
	 */
	public  function GetUInt32($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Int64|int
	 */
	public  function GetInt64($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\UInt64
	 */
	public  function GetUInt64($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Single
	 */
	public  function GetSingle($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Double|double
	 */
	public  function GetDouble($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Decimal
	 */
	public  function GetDecimal($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\DateTime
	 */
	public  function GetDateTime($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\String|string
	 */
	public  function GetString($name){}
	/**
	 * @return \System\Threading\AsyncLocal_1
	 */
	protected static function get_AsyncDeserializationInProgress(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetThreadDeserializationTracker(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_DeserializationInProgress(){}
	/**
	 * @uses SerializationInfoMethodsOverride::ThrowIfDeserializationInProgress_1 ()
	 * @uses SerializationInfoMethodsOverride::ThrowIfDeserializationInProgress_2 ($switchSuffix, $cachedValue)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ThrowIfDeserializationInProgress(mixed ...$args){}
	/**
	 * @return \System\Runtime\Serialization\DeserializationToken
	 */
	public static function StartDeserialization(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
