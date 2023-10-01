<?php
namespace Avalonia\OpenGL\Egl;
/**
 */
class EglConfigInfo extends \System\Object
{
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Config(){}
	/**
	 * @return \Avalonia\OpenGL\GlVersion
	 */
	public  function get_Version(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_SurfaceType(){}
	/**
	 * @return \System\Int32[]
	 */
	public  function get_Attributes(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_SampleCount(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_StencilSize(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
