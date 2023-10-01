<?php
namespace Avalonia\Native;
/**
 */
class TrayIconImpl extends \System\Object implements 
	\Avalonia\Platform\ITrayIconImpl,
	\System\IDisposable
{
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
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Platform\IWindowIconImpl $icon
	 * @return \System\Void|void
	 */
	public  function SetIcon($icon){}
	/**
	 * @param \System\String|string $text
	 * @return \System\Void|void
	 */
	public  function SetToolTipText($text){}
	/**
	 * @param \System\Boolean $visible
	 * @return \System\Void|void
	 */
	public  function SetIsVisible($visible){}
	/**
	 * @return \Avalonia\Controls\Platform\INativeMenuExporter
	 */
	public  function get_MenuExporter(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
