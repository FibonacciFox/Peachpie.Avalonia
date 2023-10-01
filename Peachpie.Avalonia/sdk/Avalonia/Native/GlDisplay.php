<?php
namespace Avalonia\Native;
/**
 */
class GlDisplay extends \System\Object
{
	/**
	 * @return \Avalonia\OpenGL\GlInterface
	 */
	public  function get_GlInterface(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_SampleCount(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_StencilSize(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ClearContext(){}
	/**
	 * @param \Avalonia\Native\GlContext $share
	 * @return \Avalonia\Native\GlContext
	 */
	public  function CreateSharedContext($share){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
