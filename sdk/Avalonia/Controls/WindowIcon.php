<?php
namespace Avalonia\Controls;
/**
 */
class WindowIcon extends \System\Object
{
	/**
	 * @return \Avalonia\Platform\IWindowIconImpl
	 */
	protected  function get_PlatformImpl(){}
	/**
	 * @param \System\IO\Stream $stream
	 * @return \System\Void|void
	 */
	public  function Save($stream){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
