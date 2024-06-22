<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StringTokenizerOverride {
	/**
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\String|string $exceptionMessage
	 */
	#[MethodOverride]public function __construct_1 ($s, $formatProvider, $exceptionMessage){}
	/**
	 * @param \System\String|string $s
	 * @param \System\Char $separator
	 * @param \System\String|string $exceptionMessage
	 */
	#[MethodOverride]public function __construct_2 ($s, $separator, $exceptionMessage){}
}
final class StringTokenizer extends \System\ValueType implements
	\System\IDisposable,
	\System\IEquatable_1
{
	use StringTokenizerOverride;

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $CurrentToken;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \System\Int32& &$result
	 * @param \System\Nullable_1 $separator [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	public function TryReadInt32(&$result, $separator){}
	/**
	 * @param \System\Nullable_1 $separator [generic: System\Char]
	 * @return \System\Int32|int
	 */
	public function ReadInt32($separator){}
	/**
	 * @param \System\Double& &$result
	 * @param \System\Nullable_1 $separator [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	public function TryReadDouble(&$result, $separator){}
	/**
	 * @param \System\Nullable_1 $separator [generic: System\Char]
	 * @return \System\Double|double
	 */
	public function ReadDouble($separator){}
	/**
	 * @param \System\String& &$result
	 * @param \System\Nullable_1 $separator [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	public function TryReadString(&$result, $separator){}
	/**
	 * @param \System\Nullable_1 $separator [generic: System\Char]
	 * @return \System\String|string
	 */
	public function ReadString($separator){}
	private function TryReadToken($separator){}
	private function SkipToNextToken($separator){}
	private function GetFormatException(){}
	private static function GetSeparatorFromFormatProvider($provider){}
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Utilities\StringTokenizer $left
	 * @param \Avalonia\Utilities\StringTokenizer $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Utilities\StringTokenizer $left
	 * @param \Avalonia\Utilities\StringTokenizer $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses StringTokenizerOverride::__construct_1 <br>public , args: ($s, $formatProvider, $exceptionMessage)<br>
	 * @uses StringTokenizerOverride::__construct_2 <br>public , args: ($s, $separator, $exceptionMessage)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}