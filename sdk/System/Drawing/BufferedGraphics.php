<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BufferedGraphicsMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Render_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Render_2($target){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Render_3($targetDC){}
}
/**
 */
class BufferedGraphics extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Drawing\Graphics
	 * @property
	 */
	public readonly $Graphics;
	/**
	 * @return \System\Drawing\Graphics
	 */
	public  function get_Graphics(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @uses BufferedGraphicsMethodsOverride::Render_1 ()
	 * @uses BufferedGraphicsMethodsOverride::Render_2 ($target)
	 * @uses BufferedGraphicsMethodsOverride::Render_3 ($targetDC)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Render(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
