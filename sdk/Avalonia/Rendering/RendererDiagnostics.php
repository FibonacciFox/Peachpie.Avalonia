<?php
namespace Avalonia\Rendering;
/**
 */
class RendererDiagnostics extends \System\Object implements 
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @return \Avalonia\Rendering\RendererDebugOverlays
	 */
	public  function get_DebugOverlays(){}
	/**
	 * @param \Avalonia\Rendering\RendererDebugOverlays $value
	 * @return \System\Void|void
	 */
	public  function set_DebugOverlays($value){}
	/**
	 * @return \Avalonia\Rendering\LayoutPassTiming
	 */
	protected  function get_LastLayoutPassTiming(){}
	/**
	 * @param \Avalonia\Rendering\LayoutPassTiming $value
	 * @return \System\Void|void
	 */
	protected  function set_LastLayoutPassTiming($value){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_PropertyChanged($value){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_PropertyChanged($value){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventArgs $args
	 * @return \System\Void|void
	 */
	protected  function OnPropertyChanged($args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
