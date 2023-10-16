<?php
namespace System\Drawing;
/**
 */
class BufferedGraphicsManager extends \System\Object
{
	/**
	 * @var \System\Drawing\BufferedGraphicsContext
	 * @property
	 */
	public readonly $Current;
	/**
	 * @return \System\Drawing\BufferedGraphicsContext
	 */
	public static function get_Current(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
