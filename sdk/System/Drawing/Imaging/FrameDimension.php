<?php
namespace System\Drawing\Imaging;
/**
 */
class FrameDimension extends \System\Object
{
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $Guid;
	/**
	 * @var \System\Drawing\Imaging\FrameDimension
	 * @property
	 */
	public readonly $Page;
	/**
	 * @var \System\Drawing\Imaging\FrameDimension
	 * @property
	 */
	public readonly $Resolution;
	/**
	 * @var \System\Drawing\Imaging\FrameDimension
	 * @property
	 */
	public readonly $Time;
	/**
	 * @return \System\Guid
	 */
	public  function get_Guid(){}
	/**
	 * @return \System\Drawing\Imaging\FrameDimension
	 */
	public static function get_Page(){}
	/**
	 * @return \System\Drawing\Imaging\FrameDimension
	 */
	public static function get_Resolution(){}
	/**
	 * @return \System\Drawing\Imaging\FrameDimension
	 */
	public static function get_Time(){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\Boolean
	 */
	public  function Equals($o){}
}
