<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ByteSizeHelperOverride {
	/**
	 * @deprecated
	 * @param \System\UInt64 $bytes
	 * @param \System\Boolean|bool $separate
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function ToString_1 ($bytes, $separate){}
}
class ByteSizeHelper extends \System\Object
{
	use ByteSizeHelperOverride;


}