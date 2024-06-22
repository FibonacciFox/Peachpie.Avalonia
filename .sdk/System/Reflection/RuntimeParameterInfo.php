<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RuntimeParameterInfoOverride {
	/**
	 * @deprecated
	 * @param \System\IRuntimeMethodInfo $method
	 * @param \System\Reflection\MemberInfo $member
	 * @param \System\Signature $sig
	 * @return \System\Reflection\ParameterInfo
	 */
	#[MethodOverride]protected static function GetParameters_1 ($method, $member, $sig){}
	/**
	 * @deprecated
	 * @param \System\IRuntimeMethodInfo $methodHandle
	 * @param \System\Reflection\MemberInfo $member
	 * @param \System\Signature $sig
	 * @param \System\Reflection\ParameterInfo& &$returnParameter
	 * @param \System\Boolean|bool $fetchReturnParameter
	 * @return \System\Reflection\ParameterInfo
	 */
	#[MethodOverride]private static function GetParameters_2 ($methodHandle, $member, $sig, &$returnParameter, $fetchReturnParameter){}
}
final class RuntimeParameterInfo extends \System\Reflection\ParameterInfo implements
	\System\Reflection\ICustomAttributeProvider,
	\System\Runtime\Serialization\IObjectReference
{
	use RuntimeParameterInfoOverride;

	/**
	 * @field
	 * @var \System\Reflection\ParameterAttributes
	 */
	protected $AttrsImpl;
	/**
	 * @field
	 * @var \System\Type
	 */
	protected $ClassImpl;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	protected $DefaultValueImpl;
	/**
	 * @field
	 * @var \System\Reflection\MemberInfo
	 */
	protected $MemberImpl;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $NameImpl;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $PositionImpl;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $ParameterType;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasDefaultValue;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $DefaultValue;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $RawDefaultValue;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MetadataToken;
	/**
	 * @property
	 * @var \System\Reflection\ParameterAttributes
	 * @since readonly
	 */
	public $Attributes;
	/**
	 * @property
	 * @var \System\Reflection\MemberInfo
	 * @since readonly
	 */
	public $Member;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Position;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsIn;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsLcid;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsOptional;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsOut;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsRetval;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\CustomAttributeData]
	 * @since readonly
	 */
	public $CustomAttributes;
	/**
	 * @uses RuntimeParameterInfoOverride::GetParameters_1 <br>protected , args: ($method, $member, $sig)<br>
	 * @uses RuntimeParameterInfoOverride::GetParameters_2 <br>private , args: ($methodHandle, $member, $sig, &$returnParameter, $fetchReturnParameter)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\ParameterInfo|mixed|\override
	 */
	#[MethodOverrideProtected]function GetParameters (\override ...$args){}
	/**
	 * @param \System\IRuntimeMethodInfo $method
	 * @param \System\Reflection\MemberInfo $member
	 * @param \System\Signature $sig
	 * @return \System\Reflection\ParameterInfo
	 */
	protected static function GetReturnParameter($method, $member, $sig){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Void|void
	 */
	protected function SetName($name){}
	/**
	 * @param \System\Reflection\ParameterAttributes $attributes
	 * @return \System\Void|void
	 */
	protected function SetAttributes($attributes){}
	private function GetDefaultValue($raw){}
	private function GetDefaultValueInternal($raw){}
	private static function GetRawDecimalConstant($attr){}
	private static function GetRawDateTimeConstant($attr){}
	private static function GetRawConstant($attr){}
	/**
	 * @return \System\Reflection\RuntimeModule
	 */
	protected function GetRuntimeModule(){}
}