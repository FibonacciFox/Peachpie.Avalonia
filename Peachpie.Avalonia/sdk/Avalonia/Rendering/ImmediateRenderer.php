<?php
namespace Avalonia\Rendering;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImmediateRendererMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Render_1($visual, $context){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Render_2($context, $visual, $clipRect){}
}
/**
 */
class ImmediateRenderer extends \System\Object
{
	/**
	 * @uses ImmediateRendererMethodsOverride::Render_1 ($visual, $context)
	 * @uses ImmediateRendererMethodsOverride::Render_2 ($context, $visual, $clipRect)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Render(mixed ...$args){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetTransformedBounds($visual){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
