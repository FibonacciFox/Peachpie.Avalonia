<?php
namespace System\Drawing\Printing;
/**
 */
class PreviewPageInfo extends \System\Object
{
	/**
	 * @var \System\Drawing\Image
	 * @property
	 */
	public readonly $Image;
	/**
	 * @var \System\Drawing\Size
	 * @property
	 */
	public readonly $PhysicalSize;
	/**
	 * @return \System\Drawing\Image
	 */
	public  function get_Image(){}
	/**
	 * @return \System\Drawing\Size
	 */
	public  function get_PhysicalSize(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
