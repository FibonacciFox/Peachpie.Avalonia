<?php
namespace System\Globalization;
/**
 */
class DaylightTime extends \System\Object
{
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public readonly $Start;
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public readonly $End;
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public readonly $Delta;
	/**
	 * @return \System\DateTime
	 */
	public  function get_Start(){}
	/**
	 * @return \System\DateTime
	 */
	public  function get_End(){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_Delta(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
