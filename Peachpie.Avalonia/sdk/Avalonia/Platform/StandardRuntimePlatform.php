<?php
namespace Avalonia\Platform;
/**
 */
class StandardRuntimePlatform extends \System\Object implements 
	\Avalonia\Platform\IRuntimePlatform
{
	/**
	 * @return \Avalonia\Platform\RuntimePlatformInfo
	 */
	public  function GetRuntimeInfo(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
