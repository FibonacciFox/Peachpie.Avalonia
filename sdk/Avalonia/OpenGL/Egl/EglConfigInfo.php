<?php
namespace Avalonia\OpenGL\Egl;
/**
 */
class EglConfigInfo extends \System\Object
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Config;
	/**
	 * @var \Avalonia\OpenGL\GlVersion
	 * @property
	 */
	public readonly $Version;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $SurfaceType;
	/**
	 * @var \System\Int32[]
	 * @property
	 */
	public readonly $Attributes;
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
