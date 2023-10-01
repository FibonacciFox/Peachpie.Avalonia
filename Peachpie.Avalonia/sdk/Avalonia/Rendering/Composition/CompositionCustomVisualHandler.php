<?php
namespace Avalonia\Rendering\Composition;
/**
 */
class CompositionCustomVisualHandler extends \System\Object
{
	/**
	 * @param \System\Object|object $message
	 * @return \System\Void|void
	 */
	public  function OnMessage($message){}
	/**
	 * @return \System\Void|void
	 */
	public  function OnAnimationFrameUpdate(){}
	/**
	 * @param \Avalonia\Media\ImmediateDrawingContext $drawingContext
	 * @return \System\Void|void
	 */
	public  function OnRender($drawingContext){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function VerifyAccess(){}
	/**
	 * @return \Avalonia\Vector
	 */
	protected  function get_EffectiveSize(){}
	/**
	 * @return \System\TimeSpan
	 */
	protected  function get_CompositionNow(){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function GetRenderBounds(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionCustomVisual $visual
	 * @return \System\Void|void
	 */
	protected  function Attach($visual){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Invalidate(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function RegisterForNextAnimationFrameUpdate(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
