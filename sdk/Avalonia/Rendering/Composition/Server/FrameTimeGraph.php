<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 */
class FrameTimeGraph extends \System\Object
{
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public readonly $Size;
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_Size(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function AddFrameValue($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @param \Avalonia\Platform\IDrawingContextImpl $context
	 * @return \System\Void|void
	 */
	public  function Render($context){}
	/**
	 * @param \Avalonia\Platform\IDrawingContextImpl $context
	 * @param \System\String|string $label
	 * @param \System\Double|double $value
	 * @param \Avalonia\Matrix& $originalTransform
	 * @param \System\Double|double $left
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DrawLabelledValue($context, $label, $value, $originalTransform, $left){}
	/**
	 * @param \System\Double|double $maxY
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function BuildGraphGeometry($maxY){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetYValues(){}
	/**
	 * @param \System\Int32|int $frameOffset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetFrameValue($frameOffset){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
