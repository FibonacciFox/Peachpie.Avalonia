<?php
namespace Avalonia\Input;
/**
 */
class InputManager extends \System\Object implements 
	\Avalonia\Input\IInputManager
{
	/**
	 * @return \Avalonia\Input\IInputManager
	 */
	public static function get_Instance(){}
	/**
	 * @return \System\IObservable_1
	 */
	public  function get_PreProcess(){}
	/**
	 * @return \System\IObservable_1
	 */
	public  function get_Process(){}
	/**
	 * @return \System\IObservable_1
	 */
	public  function get_PostProcess(){}
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $e
	 * @return \System\Void|void
	 */
	public  function ProcessInput($e){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
