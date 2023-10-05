<?php
namespace Avalonia\Win32\Interop;
/**
 */
class RECT extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $left;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $top;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $right;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $bottom;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Width;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Height;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Width(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Height(){}
	/**
	 * @param \Avalonia\Win32\Interop\POINT $pt
	 * @return \System\Void|void
	 */
	public  function Offset($pt){}
}
