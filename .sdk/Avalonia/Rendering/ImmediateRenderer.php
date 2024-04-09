<?php
namespace Avalonia\Rendering;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ImmediateRendererOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Visual $visual
	 * @param \Avalonia\Media\DrawingContext $context
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Render_1 ($visual, $context){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\DrawingContext $context
	 * @param \Avalonia\Visual $visual
	 * @param \Avalonia\Rect $clipRect
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Render_2 ($context, $visual, $clipRect){}
}
class ImmediateRenderer extends \System\Object
{
	use ImmediateRendererOverride;

	/**
	 * @uses ImmediateRendererOverride::Render_1 <br>public , args: ($visual, $context)<br>
	 * @uses ImmediateRendererOverride::Render_2 <br>public , args: ($context, $visual, $clipRect)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Render (\override ...$args){}
	private static function GetTransformedBounds($visual){}
	/**
	 */
	public function __construct(){}
}