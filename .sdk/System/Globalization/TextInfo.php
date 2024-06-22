<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TextInfoOverride {
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Char
	 */
	#[MethodOverride]public function ToLower_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $str
	 * @return \System\String|string
	 */
	#[MethodOverride]public function ToLower_2 ($str){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function ChangeCaseCommon_1 ($source, $destination){}
	/**
	 * @deprecated
	 * @param \System\Char& $source
	 * @param \System\Char& $destination
	 * @param \System\Int32|int $charCount
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function ChangeCaseCommon_2 ($source, $destination, $charCount){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @return \System\String|string
	 */
	#[MethodOverride]private function ChangeCaseCommon_3 ($source){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function ToLowerAsciiInvariant_1 ($s){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Char
	 */
	#[MethodOverride]private static function ToLowerAsciiInvariant_2 ($c){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Char
	 */
	#[MethodOverride]public function ToUpper_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $str
	 * @return \System\String|string
	 */
	#[MethodOverride]public function ToUpper_2 ($str){}
}
final class TextInfo extends \System\Object implements
	\System\ICloneable,
	\System\Runtime\Serialization\IDeserializationCallback
{
	use TextInfoOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Globalization\TextInfo
	 */
	protected static $Invariant;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $ANSICodePage;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $OEMCodePage;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MacCodePage;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $EBCDICCodePage;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $LCID;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $CultureName;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $ListSeparator;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsRightToLeft;
	private function OnDeserialization($sender){}
	/**
	 * @return \System\Object|object
	 */
	public function Clone(){}
	/**
	 * @param \System\Globalization\TextInfo $textInfo
	 * @return \System\Globalization\TextInfo
	 */
	public static function ReadOnly($textInfo){}
	private function VerifyWritable(){}
	/**
	 * @param \System\Boolean|bool $readOnly
	 * @return \System\Void|void
	 */
	protected function SetReadOnlyState($readOnly){}
	/**
	 * @uses TextInfoOverride::ToLower_1 <br>public , args: ($c)<br>
	 * @uses TextInfoOverride::ToLower_2 <br>public , args: ($str)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Char|\System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function ToLower (\override ...$args){}
	/**
	 * @param \System\Char $c
	 * @return \System\Char
	 */
	protected static function ToLowerInvariant($c){}
	private function ChangeCase($c, $toUpper){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @return \System\Void|void
	 */
	protected function ChangeCaseToLower($source, $destination){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @return \System\Void|void
	 */
	protected function ChangeCaseToUpper($source, $destination){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses TextInfoOverride::ChangeCaseCommon_1 <br>private , args: ($source, $destination)<br>
	 * @uses TextInfoOverride::ChangeCaseCommon_2 <br>private , args: ($source, $destination, $charCount)<br>
	 * @uses TextInfoOverride::ChangeCaseCommon_3 <br>private , args: ($source)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\String|string|mixed|\override
	 */
	#[MethodOverridePrivate]function ChangeCaseCommon (\override ...$args){}
	/**
	 * @uses TextInfoOverride::ToLowerAsciiInvariant_1 <br>protected , args: ($s)<br>
	 * @uses TextInfoOverride::ToLowerAsciiInvariant_2 <br>private , args: ($c)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|\System\Char|mixed|\override
	 */
	#[MethodOverrideProtected]function ToLowerAsciiInvariant (\override ...$args){}
	/**
	 * @uses TextInfoOverride::ToUpper_1 <br>public , args: ($c)<br>
	 * @uses TextInfoOverride::ToUpper_2 <br>public , args: ($str)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Char|\System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function ToUpper (\override ...$args){}
	/**
	 * @param \System\Char $c
	 * @return \System\Char
	 */
	protected static function ToUpperInvariant($c){}
	private static function ToUpperAsciiInvariant($c){}
	private function PopulateIsAsciiCasingSameAsInvariant(){}
	/**
	 * @param \System\String|string $str
	 * @return \System\String|string
	 */
	public function ToTitleCase($str){}
	private static function AddNonLetter($result, $input, $inputIndex, $charLen){}
	private function AddTitlecaseLetter($result, $input, $inputIndex, $charLen){}
	private function ChangeCaseCore($src, $srcLen, $dstBuffer, $dstBufferCapacity, $bToUpper){}
	private static function IsWordSeparator($category){}
	private static function IsLetterCategory($uc){}
	private static function NeedsTurkishCasing($localeName){}
	/**
	 * @param \System\Char* $src
	 * @param \System\Int32|int $srcLen
	 * @param \System\Char* $dstBuffer
	 * @param \System\Int32|int $dstBufferCapacity
	 * @param \System\Boolean|bool $bToUpper
	 * @return \System\Void|void
	 */
	protected function IcuChangeCase($src, $srcLen, $dstBuffer, $dstBufferCapacity, $bToUpper){}
}