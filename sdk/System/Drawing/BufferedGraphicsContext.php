<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BufferedGraphicsContextMethodsOverride
{
	/**
	 * @return \System\Drawing\BufferedGraphics
	 */
	#[MethodOverride] public  function Allocate_1($targetGraphics, $targetRectangle){}
	/**
	 * @return \System\Drawing\BufferedGraphics
	 */
	#[MethodOverride] public  function Allocate_2($targetDC, $targetRectangle){}
}
/**
 */
class BufferedGraphicsContext extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Drawing\Size
	 * @property
	 */
	public $MaximumBuffer;
	/**
	 * @return \System\Drawing\Size
	 */
	public  function get_MaximumBuffer(){}
	/**
	 * @param \System\Drawing\Size $value
	 * @return \System\Void|void
	 */
	public  function set_MaximumBuffer($value){}
	/**
	 * @uses BufferedGraphicsContextMethodsOverride::Allocate_1 ($targetGraphics, $targetRectangle)
	 * @uses BufferedGraphicsContextMethodsOverride::Allocate_2 ($targetDC, $targetRectangle)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Allocate(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Invalidate(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
