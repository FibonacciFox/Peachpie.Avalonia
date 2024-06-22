<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait UTF8EncodingOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Boolean|bool $encoderShouldEmitUTF8Identifier
	 */
	#[MethodOverride]public function __construct_2 ($encoderShouldEmitUTF8Identifier){}
	/**
	 * @param \System\Boolean|bool $encoderShouldEmitUTF8Identifier
	 * @param \System\Boolean|bool $throwOnInvalidBytes
	 */
	#[MethodOverride]public function __construct_3 ($encoderShouldEmitUTF8Identifier, $throwOnInvalidBytes){}
}
class UTF8Encoding extends \System\Text\Encoding implements
	\System\ICloneable
{
	use UTF8EncodingOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Text\UTF8Encoding+UTF8EncodingSealed
	 */
	protected static $s_default;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_codePage;
	/**
	 * @field
	 * @var \System\Text\CodePageDataItem
	 */
	protected $_dataItem;
	/**
	 * @field
	 * @var \System\Text\EncoderFallback
	 */
	protected $encoderFallback;
	/**
	 * @field
	 * @var \System\Text\DecoderFallback
	 */
	protected $decoderFallback;
	/**
	 * @property
	 * @var \System\ReadOnlySpan_1[System\Byte]
	 * @since readonly
	 */
	public $Preamble;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $BodyName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $EncodingName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $HeaderName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $WebName;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $WindowsCodePage;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsBrowserDisplay;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsBrowserSave;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsMailNewsDisplay;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsMailNewsSave;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSingleByte;
	/**
	 * @property
	 * @var \System\Text\EncoderFallback
	 */
	public $EncoderFallback;
	/**
	 * @property
	 * @var \System\Text\DecoderFallback
	 */
	public $DecoderFallback;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsReadOnly;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $CodePage;
	private function GetByteCountCommon($pChars, $charCount){}
	private function GetBytesCommon($pChars, $charCount, $pBytes, $byteCount){}
	private function GetCharsCommon($pBytes, $byteCount, $pChars, $charCount){}
	private function GetCharCountCommon($pBytes, $byteCount){}
	/**
	 * @uses UTF8EncodingOverride::__construct_1 <br>public , args: ()<br>
	 * @uses UTF8EncodingOverride::__construct_2 <br>public , args: ($encoderShouldEmitUTF8Identifier)<br>
	 * @uses UTF8EncodingOverride::__construct_3 <br>public , args: ($encoderShouldEmitUTF8Identifier, $throwOnInvalidBytes)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}