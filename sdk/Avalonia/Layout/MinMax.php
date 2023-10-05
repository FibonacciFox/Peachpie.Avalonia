<?php
namespace Avalonia\Layout;
/**
 */
class MinMax extends \System\ValueType
{
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $MinWidth;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $MaxWidth;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $MinHeight;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $MaxHeight;
	/**
	 * @return \System\Double|double
	 */
	public  function get_MinWidth(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_MaxWidth(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_MinHeight(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_MaxHeight(){}
}
