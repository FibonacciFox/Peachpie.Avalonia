<?php
namespace Avalonia\Platform\Internal;
/**
 */
class AvaloniaResourceDescriptor extends \System\Object implements 
	\Avalonia\Platform\Internal\IAssetDescriptor
{
	/**
	 * @return \System\Reflection\Assembly
	 */
	public  function get_Assembly(){}
	/**
	 * @return \System\IO\Stream
	 */
	public  function GetStream(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
