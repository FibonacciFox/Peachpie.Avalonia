<?php
namespace Avalonia\Styling\Activators;
/**
 */
class StyleActivatorBase extends \System\Object implements 
	\Avalonia\Styling\Activators\IStyleActivator,
	\System\IDisposable
{
	/**
	 * @return \System\Boolean
	 */
	public  function GetIsActive(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSubscribed(){}
	/**
	 * @param \Avalonia\Styling\Activators\IStyleActivatorSink $sink
	 * @return \System\Void|void
	 */
	public  function Subscribe($sink){}
	/**
	 * @param \Avalonia\Styling\Activators\IStyleActivatorSink $sink
	 * @return \System\Void|void
	 */
	public  function Unsubscribe($sink){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function EvaluateIsActive(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function ReevaluateIsActive(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Initialize(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Deinitialize(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
