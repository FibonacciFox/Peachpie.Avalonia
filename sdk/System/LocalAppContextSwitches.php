<?php
namespace System;
/**
 */
class LocalAppContextSwitches extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $EnableUnsafeUTF7Encoding;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $EnforceJapaneseEraYearRanges;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $FormatJapaneseFirstYearAsANumber;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $EnforceLegacyJapaneseDateParsing;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $PreserveEventListenerObjectIdentity;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $ForceEmitInvoke;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $ForceInterpretedInvoke;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $SerializationGuard;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $ShowILOffsets;
	/**
	 * @return \System\Boolean
	 */
	public static function get_EnableUnsafeUTF7Encoding(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_EnforceJapaneseEraYearRanges(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_FormatJapaneseFirstYearAsANumber(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_EnforceLegacyJapaneseDateParsing(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_PreserveEventListenerObjectIdentity(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_ForceEmitInvoke(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_ForceInterpretedInvoke(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_SerializationGuard(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDefaultShowILOffsetSetting(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_ShowILOffsets(){}
	/**
	 * @param \System\String|string $switchName
	 * @param \System\Int32& $cachedSwitchValue
	 * @return \System\Boolean
	 */
	protected static function GetCachedSwitchValue($switchName, $cachedSwitchValue){}
	/**
	 * @param \System\String|string $switchName
	 * @param \System\Int32& $cachedSwitchValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCachedSwitchValueInternal($switchName, $cachedSwitchValue){}
	/**
	 * @param \System\String|string $switchName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetSwitchDefaultValue($switchName){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
