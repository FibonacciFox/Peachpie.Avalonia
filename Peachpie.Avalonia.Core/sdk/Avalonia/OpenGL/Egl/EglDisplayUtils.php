<?php
namespace Avalonia\OpenGL\Egl;
/**
 */
class EglDisplayUtils extends \System\Object
{
	/**
	 * @param \Avalonia\OpenGL\Egl\EglDisplayCreationOptions $options
	 * @return \System\IntPtr
	 */
	public static function CreateDisplay($options){}
	/**
	 * @param \Avalonia\OpenGL\Egl\EglInterface $egl
	 * @param \System\IntPtr $display
	 * @param \System\Collections\Generic\IEnumerable_1 $versions
	 * @return \Avalonia\OpenGL\Egl\EglConfigInfo
	 */
	public static function InitializeAndGetConfig($egl, $display, $versions){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
