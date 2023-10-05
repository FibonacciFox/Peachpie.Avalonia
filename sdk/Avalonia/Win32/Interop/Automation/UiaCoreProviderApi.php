<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
class UiaCoreProviderApi extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $UIA_E_ELEMENTNOTENABLED;
	/**
	 * @return \System\Boolean
	 */
	public static function UiaClientsAreListening(){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @param \System\IntPtr $wParam
	 * @param \System\IntPtr $lParam
	 * @param \Avalonia\Win32\Interop\Automation\IRawElementProviderSimple $el
	 * @return \System\IntPtr
	 */
	public static function UiaReturnRawElementProvider($hwnd, $wParam, $lParam, $el){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @param \Avalonia\Win32\Interop\Automation\IRawElementProviderSimple& $provider
	 * @return \System\Int32|int
	 */
	public static function UiaHostProviderFromHwnd($hwnd, $provider){}
	/**
	 * @param \Avalonia\Win32\Interop\Automation\IRawElementProviderSimple $provider
	 * @param \System\Int32|int $id
	 * @return \System\Int32|int
	 */
	public static function UiaRaiseAutomationEvent($provider, $id){}
	/**
	 * @param \Avalonia\Win32\Interop\Automation\IRawElementProviderSimple $provider
	 * @param \System\Int32|int $id
	 * @param \System\Object|object $oldValue
	 * @param \System\Object|object $newValue
	 * @return \System\Int32|int
	 */
	public static function UiaRaiseAutomationPropertyChangedEvent($provider, $id, $oldValue, $newValue){}
	/**
	 * @param \Avalonia\Win32\Interop\Automation\IRawElementProviderSimple $provider
	 * @param \Avalonia\Win32\Interop\Automation\StructureChangeType $structureChangeType
	 * @param \System\Int32[] $runtimeId
	 * @param \System\Int32|int $runtimeIdLen
	 * @return \System\Int32|int
	 */
	public static function UiaRaiseStructureChangedEvent($provider, $structureChangeType, $runtimeId, $runtimeIdLen){}
	/**
	 * @param \Avalonia\Win32\Interop\Automation\IRawElementProviderSimple $provider
	 * @return \System\Int32|int
	 */
	public static function UiaDisconnectProvider($provider){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
