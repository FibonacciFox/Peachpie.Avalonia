<?php
namespace Avalonia\FreeDesktop;
/**
 */
class DBusTrayIconImpl extends \System\Object implements 
	\Avalonia\Platform\ITrayIconImpl,
	\System\IDisposable
{
	/**
	 * @var \System\ValueTuple_3[System\Int32,System\Int32,System\Byte[]]
	 * @field
	 */
	public readonly $EmptyPixmap;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsActive;
	/**
	 * @var \Avalonia\Controls\Platform\INativeMenuExporter
	 * @property
	 */
	public readonly $MenuExporter;
	/**
	 * @var \System\Action
	 * @property
	 */
	public $OnClicked;
	/**
	 * @var \System\Func_2[Avalonia\Platform\IWindowIconImpl,System\UInt32[]]
	 * @property
	 */
	public $IconConverterDelegate;
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsActive(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_IsActive($value){}
	/**
	 * @return \Avalonia\Controls\Platform\INativeMenuExporter
	 */
	public  function get_MenuExporter(){}
	/**
	 * @return \System\Action
	 */
	public  function get_OnClicked(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function set_OnClicked($value){}
	/**
	 * @return \System\Func_2
	 */
	public  function get_IconConverterDelegate(){}
	/**
	 * @param \System\Func_2 $value
	 * @return \System\Void|void
	 */
	public  function set_IconConverterDelegate($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WatchAsync(){}
	/**
	 * @param \System\String|string $name
	 * @param \System\String|string $newOwner
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnNameChange($name, $newOwner){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateTrayIcon(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DestroyTrayIcon(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Platform\IWindowIconImpl $icon
	 * @return \System\Void|void
	 */
	public  function SetIcon($icon){}
	/**
	 * @param \System\Boolean $visible
	 * @return \System\Void|void
	 */
	public  function SetIsVisible($visible){}
	/**
	 * @param \System\String|string $text
	 * @return \System\Void|void
	 */
	public  function SetToolTipText($text){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
