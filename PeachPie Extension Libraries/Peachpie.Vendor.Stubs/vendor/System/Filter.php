<?php
namespace System;
final class Filter extends \System\ValueType
{

	/**
	 * @param \System\MdUtf8String $name
	 * @return \System\Boolean|bool
	 */
	public function Match($name){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function RequiresStringComparison(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function CaseSensitive(){}
	/**
	 * @return \System\UInt32
	 */
	public function GetHashToMatch(){}
	/**
	 * @param \System\Byte* $pUtf8Name
	 * @param \System\Int32|int $cUtf8Name
	 * @param \System\RuntimeType+MemberListType $listType
	 */
	public function __construct($pUtf8Name, $cUtf8Name, $listType){}
}