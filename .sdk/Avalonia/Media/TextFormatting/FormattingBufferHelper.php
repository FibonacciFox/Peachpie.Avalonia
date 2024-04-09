<?php
namespace Avalonia\Media\TextFormatting;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FormattingBufferHelperOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Utilities\ArrayBuilder_1 $arrayBuilder [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function ClearThenResetIfTooLarge_1 ($arrayBuilder){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\List_1 $list [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function ClearThenResetIfTooLarge_2 ($list){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\Stack_1 $stack [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function ClearThenResetIfTooLarge_3 ($stack){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\Dictionary_2 $dictionary [generic: TKey,TValue]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function ClearThenResetIfTooLarge_4 ($dictionary){}
}
class FormattingBufferHelper extends \System\Object
{
	use FormattingBufferHelperOverride;

	/**
	 * @uses FormattingBufferHelperOverride::ClearThenResetIfTooLarge_1 <br>public , args: ($arrayBuilder)<br>
	 * @uses FormattingBufferHelperOverride::ClearThenResetIfTooLarge_2 <br>public , args: ($list)<br>
	 * @uses FormattingBufferHelperOverride::ClearThenResetIfTooLarge_3 <br>public , args: ($stack)<br>
	 * @uses FormattingBufferHelperOverride::ClearThenResetIfTooLarge_4 <br>public , args: ($dictionary)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function ClearThenResetIfTooLarge (\override ...$args){}
	private static function IsBufferTooLarge($capacity){}
	private static function RoundUpToPowerOf2($value){}
}