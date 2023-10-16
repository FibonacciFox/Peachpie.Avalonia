<?php
namespace System\Drawing\Imaging;
/**
 */
class ColorPalette extends \System\Object
{
	/**
	 * @var \System\Drawing\Color[]
	 * @property
	 */
	public readonly $Entries;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Flags;
	/**
	 * @return \System\Drawing\Color[]
	 */
	public  function get_Entries(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Flags(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
