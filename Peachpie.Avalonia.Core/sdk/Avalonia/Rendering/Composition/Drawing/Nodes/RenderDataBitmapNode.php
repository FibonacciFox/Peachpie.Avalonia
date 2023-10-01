<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
/**
 */
class RenderDataBitmapNode extends \System\Object implements 
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem,
	\System\IDisposable
{
	/**
	 * @return \Avalonia\Utilities\IRef_1
	 */
	public  function get_Bitmap(){}
	/**
	 * @param \Avalonia\Utilities\IRef_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Bitmap($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Opacity(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Opacity($value){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_SourceRect(){}
	/**
	 * @param \Avalonia\Rect $value
	 * @return \System\Void|void
	 */
	public  function set_SourceRect($value){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_DestRect(){}
	/**
	 * @param \Avalonia\Rect $value
	 * @return \System\Void|void
	 */
	public  function set_DestRect($value){}
	/**
	 * @param \Avalonia\Point $p
	 * @return \System\Boolean
	 */
	public  function HitTest($p){}
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataNodeRenderContext& $context
	 * @return \System\Void|void
	 */
	public  function Invoke($context){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_Bounds(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
