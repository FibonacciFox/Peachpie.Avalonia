<?php
namespace System\Globalization;
final class SortKey extends \System\Object
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $OriginalString;
	/**
	 * @property
	 * @var \System\Byte[]
	 * @since readonly
	 */
	public $KeyData;
	/**
	 * @param \System\Globalization\SortKey $sortkey1
	 * @param \System\Globalization\SortKey $sortkey2
	 * @return \System\Int32|int
	 */
	public static function Compare($sortkey1, $sortkey2){}
}