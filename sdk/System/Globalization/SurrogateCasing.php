<?php
namespace System\Globalization;
/**
 */
class SurrogateCasing extends \System\Object
{
	/**
	 * @param \System\Char $h
	 * @param \System\Char $l
	 * @param \System\Char& $hr
	 * @param \System\Char& $lr
	 * @return \System\Void|void
	 */
	protected static function ToUpper($h, $l, $hr, $lr){}
	/**
	 * @param \System\Char $h
	 * @param \System\Char $l
	 * @param \System\Char& $hr
	 * @param \System\Char& $lr
	 * @return \System\Void|void
	 */
	protected static function ToLower($h, $l, $hr, $lr){}
	/**
	 * @param \System\Char $h1
	 * @param \System\Char $l1
	 * @param \System\Char $h2
	 * @param \System\Char $l2
	 * @return \System\Boolean
	 */
	protected static function Equal($h1, $l1, $h2, $l2){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
