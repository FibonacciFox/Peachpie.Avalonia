<?php
namespace Avalonia\Win32\DirectX;
/**
 */
class DxgiConnection extends \System\Object implements 
	\Avalonia\Rendering\IRenderTimer
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_RunsInBackground(){}
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
	public static function TryCreateAndRegister(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RunLoop(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetBestOutputToVWaitOn(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryCreateAndRegisterCore(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
