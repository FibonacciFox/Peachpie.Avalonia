<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 */
class FpsCounter extends \System\Object
{
	/**
	 * @return \System\Void|void
	 */
	public  function FpsTick(){}
	/**
	 * @param \Avalonia\Platform\IDrawingContextImpl $context
	 * @param \System\String|string $aux
	 * @return \System\Void|void
	 */
	public  function RenderFps($context, $aux){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
