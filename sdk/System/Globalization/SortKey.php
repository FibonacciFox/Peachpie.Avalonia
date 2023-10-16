<?php
namespace System\Globalization;
/**
 */
class SortKey extends \System\Object
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $OriginalString;
	/**
	 * @var \System\Byte[]
	 * @property
	 */
	public readonly $KeyData;
	/**
	 * @return \System\String|string
	 */
	public  function get_OriginalString(){}
	/**
	 * @return \System\Byte[]
	 */
	public  function get_KeyData(){}
	/**
	 * @param \System\Globalization\SortKey $sortkey1
	 * @param \System\Globalization\SortKey $sortkey2
	 * @return \System\Int32|int
	 */
	public static function Compare($sortkey1, $sortkey2){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Boolean
	 */
	public  function Equals($value){}
}
