<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EncoderNLSOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $replacement
	 */
	#[MethodOverride]public function __construct_2 ($replacement){}
}
final class EncoderReplacementFallback extends \System\Text\EncoderFallback
{
	use EncoderNLSOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Text\EncoderReplacementFallback
	 */
	protected static $s_default;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $DefaultString;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MaxCharCount;
	/**
	 * @uses EncoderReplacementFallbackOverride::__construct_1 <br>public , args: ()<br>
	 * @uses EncoderReplacementFallbackOverride::__construct_2 <br>public , args: ($replacement)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}