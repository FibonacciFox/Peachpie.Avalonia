<?php
namespace Avalonia\DesignerSupport\Remote;
/**
 */
class DummyRenderTimer extends \System\Object implements 
	\Avalonia\Rendering\IRenderTimer
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $RunsInBackground;
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function add_Tick($value){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_Tick($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_RunsInBackground(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
