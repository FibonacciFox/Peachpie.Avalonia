<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
class UiaCoreTypesApi extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $UIA_E_ELEMENTNOTENABLED;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $UIA_E_ELEMENTNOTAVAILABLE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $UIA_E_NOCLICKABLEPOINT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $UIA_E_PROXYASSEMBLYNOTLOADED;
	/**
	 * @return \System\Boolean
	 */
	protected static function get_IsNetComInteropAvailable(){}
	/**
	 * @param \Avalonia\Win32\Interop\Automation\AutomationIdType $type
	 * @param \System\Guid& $guid
	 * @return \System\Int32|int
	 */
	protected static function UiaLookupId($type, $guid){}
	/**
	 * @return \System\Object|object
	 */
	protected static function UiaGetReservedNotSupportedValue(){}
	/**
	 * @return \System\Object|object
	 */
	protected static function UiaGetReservedMixedAttributeValue(){}
	/**
	 * @param \System\Int32|int $hr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckError($hr){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetIsNetComInteropAvailable(){}
	/**
	 * @param \Avalonia\Win32\Interop\Automation\AutomationIdType $type
	 * @param \System\Guid& $guid
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RawUiaLookupId($type, $guid){}
	/**
	 * @param \System\Object& $notSupportedValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RawUiaGetReservedNotSupportedValue($notSupportedValue){}
	/**
	 * @param \System\Object& $mixedAttributeValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RawUiaGetReservedMixedAttributeValue($mixedAttributeValue){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
