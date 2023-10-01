<?php
namespace Avalonia\Controls\Remote\Server;
/**
 */
class Framebuffer extends \System\Object
{
	/**
	 * @return \Avalonia\Controls\Remote\Server\Framebuffer
	 */
	public static function get_Empty(){}
	/**
	 * @return \Avalonia\Remote\Protocol\Viewport\PixelFormat
	 */
	public  function get_Format(){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_ClientSize(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_RenderScaling(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Stride(){}
	/**
	 * @return \Avalonia\Controls\Remote\Server\FrameStatus
	 */
	public  function GetStatus(){}
	/**
	 * @param \System\Action $onUnlocked
	 * @return \Avalonia\Platform\ILockedFramebuffer
	 */
	public  function Lock($onUnlocked){}
	/**
	 * @param \System\Int64|int $sequenceId
	 * @return \Avalonia\Remote\Protocol\Viewport\FrameMessage
	 */
	public  function ToMessage($sequenceId){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
