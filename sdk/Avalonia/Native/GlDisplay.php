<?php
namespace Avalonia\Native;
/**
 */
class GlDisplay extends \System\Object
{
	/**
	 * @var \Avalonia\OpenGL\GlInterface
	 * @property
	 */
	public readonly $GlInterface;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $SampleCount;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $StencilSize;
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
