<?php
namespace Avalonia\Controls\Remote\Server;
/**
 */
class RemoteServerTopLevelImpl extends \Avalonia\Controls\Embedding\Offscreen\OffscreenTopLevelImplBase implements 
	\Avalonia\Platform\ITopLevelImpl,
	\Avalonia\Platform\IOptionalFeatureProvider,
	\System\IDisposable,
	\Avalonia\Controls\Platform\Surfaces\IFramebufferPlatformSurface
{
	/**
	 * @param \Avalonia\Remote\Protocol\Input\MouseButton $button
	 * @param \System\Boolean $pressed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAvaloniaEventType($button, $pressed){}
	/**
	 * @param \Avalonia\Remote\Protocol\Input\InputModifiers[] $modifiers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAvaloniaRawInputModifiers($modifiers){}
	/**
	 * @param \Avalonia\Remote\Protocol\IAvaloniaRemoteTransportConnection $transport
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	protected  function OnMessage($transport, $obj){}
	/**
	 * @param \Avalonia\Remote\Protocol\Viewport\PixelFormat[] $formats
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryGetValidPixelFormat($formats){}
	/**
	 * @param \Avalonia\Size $constraint
	 * @return \Avalonia\Size
	 */
	protected  function Measure($constraint){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetOrCreateFramebuffer(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SendLastFrameIfNeeded(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function RenderAndSendFrameIfNeeded(){}
	/**
	 * @return \Avalonia\Input\IKeyboardDevice
	 */
	public  function get_KeyboardDevice(){}
	/**
	 * @return \Avalonia\Controls\Platform\Surfaces\IFramebufferRenderTarget
	 */
	public  function CreateFramebufferRenderTarget(){}
}
