<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait UnicodeEncodingOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Boolean|bool $bigEndian
	 * @param \System\Boolean|bool $byteOrderMark
	 */
	#[MethodOverride]public function __construct_2 ($bigEndian, $byteOrderMark){}
	/**
	 * @param \System\Boolean|bool $bigEndian
	 * @param \System\Boolean|bool $byteOrderMark
	 * @param \System\Boolean|bool $throwOnInvalidBytes
	 */
	#[MethodOverride]public function __construct_3 ($bigEndian, $byteOrderMark, $throwOnInvalidBytes){}
}
class UnicodeEncoding extends \System\Text\Encoding implements
	\System\ICloneable
{
	use UnicodeEncodingOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Text\UnicodeEncoding
	 */
	protected static $s_bigEndianDefault;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Text\UnicodeEncoding
	 */
	protected static $s_littleEndianDefault;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const CharSize = '2';
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
	/**
	 * @uses UnicodeEncodingOverride::__construct_1 <br>public , args: ()<br>
	 * @uses UnicodeEncodingOverride::__construct_2 <br>public , args: ($bigEndian, $byteOrderMark)<br>
	 * @uses UnicodeEncodingOverride::__construct_3 <br>public , args: ($bigEndian, $byteOrderMark, $throwOnInvalidBytes)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}