<?php
namespace Avalonia\Platform\Internal;
/**
 */
class AssemblyResourceDescriptor extends \System\Object implements 
	\Avalonia\Platform\Internal\IAssetDescriptor
{
	/**
	 * @return \System\IO\Stream
	 */
	public  function GetStream(){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	public  function get_Assembly(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
