<?php
namespace System\Globalization;
/**
 */
class TimeSpanRawInfo extends \System\ValueType
{
	/**
	 * @var \System\Globalization\TimeSpanParse+TTT
	 * @field
	 */
	protected $_lastSeenTTT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_tokenCount;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_sepCount;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_numCount;
	/**
	 * @var \System\Globalization\TimeSpanParse+TimeSpanToken
	 * @field
	 */
	protected $_numbers0;
	/**
	 * @var \System\Globalization\TimeSpanParse+TimeSpanToken
	 * @field
	 */
	protected $_numbers1;
	/**
	 * @var \System\Globalization\TimeSpanParse+TimeSpanToken
	 * @field
	 */
	protected $_numbers2;
	/**
	 * @var \System\Globalization\TimeSpanParse+TimeSpanToken
	 * @field
	 */
	protected $_numbers3;
	/**
	 * @var \System\Globalization\TimeSpanParse+TimeSpanToken
	 * @field
	 */
	protected $_numbers4;
	/**
	 * @var \System\ReadOnlySpan_1[System\Char]
	 * @field
	 */
	protected $_literals0;
	/**
	 * @var \System\ReadOnlySpan_1[System\Char]
	 * @field
	 */
	protected $_literals1;
	/**
	 * @var \System\ReadOnlySpan_1[System\Char]
	 * @field
	 */
	protected $_literals2;
	/**
	 * @var \System\ReadOnlySpan_1[System\Char]
	 * @field
	 */
	protected $_literals3;
	/**
	 * @var \System\ReadOnlySpan_1[System\Char]
	 * @field
	 */
	protected $_literals4;
	/**
	 * @var \System\ReadOnlySpan_1[System\Char]
	 * @field
	 */
	protected $_literals5;
	/**
	 * @return \System\Globalization\FormatLiterals
	 */
	protected  function get_PositiveLocalized(){}
	/**
	 * @return \System\Globalization\FormatLiterals
	 */
	protected  function get_NegativeLocalized(){}
	/**
	 * @param \System\Globalization\FormatLiterals $pattern
	 * @return \System\Boolean
	 */
	protected  function FullAppCompatMatch($pattern){}
	/**
	 * @param \System\Globalization\FormatLiterals $pattern
	 * @return \System\Boolean
	 */
	protected  function PartialAppCompatMatch($pattern){}
	/**
	 * @param \System\Globalization\FormatLiterals $pattern
	 * @return \System\Boolean
	 */
	protected  function FullMatch($pattern){}
	/**
	 * @param \System\Globalization\FormatLiterals $pattern
	 * @return \System\Boolean
	 */
	protected  function FullDMatch($pattern){}
	/**
	 * @param \System\Globalization\FormatLiterals $pattern
	 * @return \System\Boolean
	 */
	protected  function FullHMMatch($pattern){}
	/**
	 * @param \System\Globalization\FormatLiterals $pattern
	 * @return \System\Boolean
	 */
	protected  function FullDHMMatch($pattern){}
	/**
	 * @param \System\Globalization\FormatLiterals $pattern
	 * @return \System\Boolean
	 */
	protected  function FullHMSMatch($pattern){}
	/**
	 * @param \System\Globalization\FormatLiterals $pattern
	 * @return \System\Boolean
	 */
	protected  function FullDHMSMatch($pattern){}
	/**
	 * @param \System\Globalization\FormatLiterals $pattern
	 * @return \System\Boolean
	 */
	protected  function FullHMSFMatch($pattern){}
	/**
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @return \System\Void|void
	 */
	protected  function Init($dtfi){}
	/**
	 * @param \System\Globalization\TimeSpanToken& $tok
	 * @param \System\Globalization\TimeSpanResult& $result
	 * @return \System\Boolean
	 */
	protected  function ProcessToken($tok, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $sep
	 * @param \System\Globalization\TimeSpanResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddSep($sep, $result){}
	/**
	 * @param \System\Globalization\TimeSpanToken $num
	 * @param \System\Globalization\TimeSpanResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddNum($num, $result){}
}
