<?php
namespace Avalonia\DesignerSupport\Remote;
/**
 */
class PreviewerWindowingPlatform extends \System\Object implements 
	\Avalonia\Platform\IWindowingPlatform
{
	/**
	 * @return \Avalonia\Platform\ITrayIconImpl
	 */
	public  function CreateTrayIcon(){}
	/**
	 * @return \Avalonia\Platform\IWindowImpl
	 */
	public  function CreateWindow(){}
	/**
	 * @return \Avalonia\Platform\IWindowImpl
	 */
	public  function CreateEmbeddableWindow(){}
	/**
	 * @param \Avalonia\Remote\Protocol\IAvaloniaRemoteTransportConnection $transport
	 * @return \System\Void|void
	 */
	public static function Initialize($transport){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
