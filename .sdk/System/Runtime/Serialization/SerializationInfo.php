<?php
namespace System\Runtime\Serialization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SerializationInfoOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Object|object $value
	 * @param \System\Type $type
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddValue_1 ($name, $value, $type){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddValue_2 ($name, $value){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddValue_3 ($name, $value){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Char $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddValue_4 ($name, $value){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\SByte $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddValue_5 ($name, $value){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Byte $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddValue_6 ($name, $value){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Int16 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddValue_7 ($name, $value){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\UInt16 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddValue_8 ($name, $value){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddValue_9 ($name, $value){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddValue_10 ($name, $value){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddValue_11 ($name, $value){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddValue_12 ($name, $value){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddValue_13 ($name, $value){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddValue_14 ($name, $value){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Decimal $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddValue_15 ($name, $value){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\DateTime $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddValue_16 ($name, $value){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function ThrowIfDeserializationInProgress_1 (){}
	/**
	 * @deprecated
	 * @param \System\String|string $switchSuffix
	 * @param \System\Int32& $cachedValue
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function ThrowIfDeserializationInProgress_2 ($switchSuffix, $cachedValue){}
	/**
	 * @param \System\Type $type
	 * @param \System\Runtime\Serialization\IFormatterConverter $converter
	 */
	#[MethodOverride]public function __construct_1 ($type, $converter){}
	/**
	 * @param \System\Type $type
	 * @param \System\Runtime\Serialization\IFormatterConverter $converter
	 * @param \System\Boolean|bool $requireSameTokenInPartialTrust
	 */
	#[MethodOverride]public function __construct_2 ($type, $converter, $requireSameTokenInPartialTrust){}
}
final class SerializationInfo extends \System\Object
{
	use SerializationInfoOverride;

	/**
	 * @property
	 * @var \System\String|string
	 */
	public $FullTypeName;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $AssemblyName;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsFullTypeNameSetExplicit;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsAssemblyNameSetExplicit;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MemberCount;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $ObjectType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $DeserializationInProgress;
	/**
	 * @param \System\Type $type
	 * @return \System\Void|void
	 */
	public function SetType($type){}
	/**
	 * @return \System\Runtime\Serialization\SerializationInfoEnumerator
	 */
	public function GetEnumerator(){}
	private function ExpandArrays(){}
	/**
	 * @uses SerializationInfoOverride::AddValue_1 <br>public , args: ($name, $value, $type)<br>
	 * @uses SerializationInfoOverride::AddValue_2 <br>public , args: ($name, $value)<br>
	 * @uses SerializationInfoOverride::AddValue_3 <br>public , args: ($name, $value)<br>
	 * @uses SerializationInfoOverride::AddValue_4 <br>public , args: ($name, $value)<br>
	 * @uses SerializationInfoOverride::AddValue_5 <br>public , args: ($name, $value)<br>
	 * @uses SerializationInfoOverride::AddValue_6 <br>public , args: ($name, $value)<br>
	 * @uses SerializationInfoOverride::AddValue_7 <br>public , args: ($name, $value)<br>
	 * @uses SerializationInfoOverride::AddValue_8 <br>public , args: ($name, $value)<br>
	 * @uses SerializationInfoOverride::AddValue_9 <br>public , args: ($name, $value)<br>
	 * @uses SerializationInfoOverride::AddValue_10 <br>public , args: ($name, $value)<br>
	 * @uses SerializationInfoOverride::AddValue_11 <br>public , args: ($name, $value)<br>
	 * @uses SerializationInfoOverride::AddValue_12 <br>public , args: ($name, $value)<br>
	 * @uses SerializationInfoOverride::AddValue_13 <br>public , args: ($name, $value)<br>
	 * @uses SerializationInfoOverride::AddValue_14 <br>public , args: ($name, $value)<br>
	 * @uses SerializationInfoOverride::AddValue_15 <br>public , args: ($name, $value)<br>
	 * @uses SerializationInfoOverride::AddValue_16 <br>public , args: ($name, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function AddValue (\override ...$args){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Object|object $value
	 * @param \System\Type $type
	 * @return \System\Void|void
	 */
	protected function AddValueInternal($name, $value, $type){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Object|object $value
	 * @param \System\Type $type
	 * @return \System\Void|void
	 */
	public function UpdateValue($name, $value, $type){}
	private function FindElement($name){}
	private function GetElement($name, &$foundType){}
	private function GetElementNoThrow($name, &$foundType){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Type $type
	 * @return \System\Object|object
	 */
	public function GetValue($name, $type){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Type $type
	 * @return \System\Object|object
	 */
	protected function GetValueNoThrow($name, $type){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Boolean|bool
	 */
	public function GetBoolean($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Char
	 */
	public function GetChar($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\SByte
	 */
	public function GetSByte($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Byte
	 */
	public function GetByte($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Int16
	 */
	public function GetInt16($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\UInt16
	 */
	public function GetUInt16($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Int32|int
	 */
	public function GetInt32($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\UInt32
	 */
	public function GetUInt32($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Int64|int
	 */
	public function GetInt64($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\UInt64
	 */
	public function GetUInt64($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Single
	 */
	public function GetSingle($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Double|double
	 */
	public function GetDouble($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Decimal
	 */
	public function GetDecimal($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\DateTime
	 */
	public function GetDateTime($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\String|string
	 */
	public function GetString($name){}
	private static function GetThreadDeserializationTracker(){}
	/**
	 * @uses SerializationInfoOverride::ThrowIfDeserializationInProgress_1 <br>public , args: ()<br>
	 * @uses SerializationInfoOverride::ThrowIfDeserializationInProgress_2 <br>public , args: ($switchSuffix, $cachedValue)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function ThrowIfDeserializationInProgress (\override ...$args){}
	/**
	 * @return \System\Runtime\Serialization\DeserializationToken
	 */
	public static function StartDeserialization(){}
	/**
	 * @uses SerializationInfoOverride::__construct_1 <br>public , args: ($type, $converter)<br>
	 * @uses SerializationInfoOverride::__construct_2 <br>public , args: ($type, $converter, $requireSameTokenInPartialTrust)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}