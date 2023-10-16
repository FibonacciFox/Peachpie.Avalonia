<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EncodingTableMethodsOverride
{
	/**
	 * @return \System\Text\EncodingInfo[]
	 */
	#[MethodOverride] protected static function GetEncodings_1(){}
	/**
	 * @return \System\Text\EncodingInfo[]
	 */
	#[MethodOverride] protected static function GetEncodings_2($encodingInfoList){}
}
/**
 */
class EncodingTable extends \System\Object
{
	/**
	 * @param \System\String|string $name
	 * @return \System\Int32|int
	 */
	protected static function GetCodePageFromName($name){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalGetCodePageFromName($name){}
	/**
	 * @uses EncodingTableMethodsOverride::GetEncodings_1 ()
	 * @uses EncodingTableMethodsOverride::GetEncodings_2 ($encodingInfoList)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetEncodings(mixed ...$args){}
	/**
	 * @param \System\Int32|int $codePage
	 * @return \System\Text\CodePageDataItem
	 */
	protected static function GetCodePageDataItem($codePage){}
	/**
	 * @param \System\Int32|int $codePage
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalGetCodePageDataItem($codePage, $index){}
	/**
	 * @param \System\Int32|int $codePage
	 * @param \System\Int32|int $englishNameIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDisplayName($codePage, $englishNameIndex){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
