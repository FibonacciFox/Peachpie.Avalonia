<?php
namespace System;
class LocalAppContextSwitches extends \System\Object
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $EnableUnsafeUTF7Encoding;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $EnforceJapaneseEraYearRanges;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $FormatJapaneseFirstYearAsANumber;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $EnforceLegacyJapaneseDateParsing;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $PreserveEventListenerObjectIdentity;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $ForceEmitInvoke;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $ForceInterpretedInvoke;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $SerializationGuard;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $ShowILOffsets;
	private static function GetDefaultShowILOffsetSetting(){}
	/**
	 * @param \System\String|string $switchName
	 * @param \System\Int32& $cachedSwitchValue
	 * @return \System\Boolean|bool
	 */
	protected static function GetCachedSwitchValue($switchName, $cachedSwitchValue){}
	private static function GetCachedSwitchValueInternal($switchName, $cachedSwitchValue){}
	private static function GetSwitchDefaultValue($switchName){}
}