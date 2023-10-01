<?php
namespace Avalonia\Win32;
/**
 */
class IconImpl extends \System\Object implements 
	\Avalonia\Platform\IWindowIconImpl
{
	/**
	 * @return \System\IntPtr
	 */
	public  function get_HIcon(){}
	/**
	 * @param \System\IO\Stream $outputStream
	 * @return \System\Void|void
	 */
	public  function Save($outputStream){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
