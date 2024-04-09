<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EncodingTableOverride {
	/**
	 * @deprecated
	 * @return \System\Text\EncodingInfo
	 */
	#[MethodOverride]protected static function GetEncodings_1 (){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\Dictionary_2 $encodingInfoList [generic: System\Int32,System\Text\EncodingInfo]
	 * @return \System\Text\EncodingInfo
	 */
	#[MethodOverride]protected static function GetEncodings_2 ($encodingInfoList){}
}
class EncodingTable extends \System\Object
{
	use EncodingTableOverride;

	/**
	 * @param \System\String|string $name
	 * @return \System\Int32|int
	 */
	protected static function GetCodePageFromName($name){}
	private static function InternalGetCodePageFromName($name){}
	/**
	 * @uses EncodingTableOverride::GetEncodings_1 <br>protected , args: ()<br>
	 * @uses EncodingTableOverride::GetEncodings_2 <br>protected , args: ($encodingInfoList)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Text\EncodingInfo|mixed|\override
	 */
	#[MethodOverrideProtected]function GetEncodings (\override ...$args){}
	/**
	 * @param \System\Int32|int $codePage
	 * @return \System\Text\CodePageDataItem
	 */
	protected static function GetCodePageDataItem($codePage){}
	private static function InternalGetCodePageDataItem($codePage, $index){}
	private static function GetDisplayName($codePage, $englishNameIndex){}
}