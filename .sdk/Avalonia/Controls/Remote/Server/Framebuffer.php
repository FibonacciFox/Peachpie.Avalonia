<?php
namespace Avalonia\Controls\Remote\Server;
final class Framebuffer extends \System\Object
{

	/**
	 * @property
	 * @var \Avalonia\Controls\Remote\Server\RemoteServerTopLevelImpl+Framebuffer
	 * @since readonly
	 */
	public $Empty;
	/**
	 * @property
	 * @var \Avalonia\Remote\Protocol\Viewport\PixelFormat
	 * @since readonly
	 */
	public $Format;
	/**
	 * @property
	 * @var \Avalonia\Size
	 * @since readonly
	 */
	public $ClientSize;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $RenderScaling;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Stride;
	/**
	 * @return \Avalonia\Controls\Remote\Server\RemoteServerTopLevelImpl+FrameStatus
	 */
	public function GetStatus(){}
	/**
	 * @param \System\Action $onUnlocked
	 * @return \Avalonia\Platform\ILockedFramebuffer
	 */
	public function Lock($onUnlocked){}
	/**
	 * @param \System\Int64|int $sequenceId
	 * @return \Avalonia\Remote\Protocol\Viewport\FrameMessage
	 */
	public function ToMessage($sequenceId){}
	/**
	 * @param \Avalonia\Remote\Protocol\Viewport\PixelFormat $format
	 * @param \Avalonia\Size $clientSize
	 * @param \System\Double|double $renderScaling
	 */
	public function __construct($format, $clientSize, $renderScaling){}
}