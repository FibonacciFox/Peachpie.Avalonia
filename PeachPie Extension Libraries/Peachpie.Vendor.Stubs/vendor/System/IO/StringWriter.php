<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StringWriterOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\IFormatProvider $formatProvider
	 */
	#[MethodOverride]public function __construct_2 ($formatProvider){}
	/**
	 * @param \System\Text\StringBuilder $sb
	 */
	#[MethodOverride]public function __construct_3 ($sb){}
	/**
	 * @param \System\Text\StringBuilder $sb
	 * @param \System\IFormatProvider $formatProvider
	 */
	#[MethodOverride]public function __construct_4 ($sb, $formatProvider){}
}
class StringWriter extends \System\IO\TextWriter implements
	\System\IDisposable,
	\System\IAsyncDisposable
{
	use StringWriterOverride;
	/**
	 * @field
	 * @var \System\Char[]
	 */
	protected $CoreNewLine;
	/**
	 * @property
	 * @var \System\Text\Encoding
	 * @since readonly
	 */
	public $Encoding;
	/**
	 * @property
	 * @var \System\IFormatProvider
	 * @since readonly
	 */
	public $FormatProvider;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $NewLine;
	/**
	 * @return \System\Text\StringBuilder
	 */
	public function GetStringBuilder(){}
	/**
	 * @uses StringWriterOverride::__construct_1 <br>public , args: ()<br>
	 * @uses StringWriterOverride::__construct_2 <br>public , args: ($formatProvider)<br>
	 * @uses StringWriterOverride::__construct_3 <br>public , args: ($sb)<br>
	 * @uses StringWriterOverride::__construct_4 <br>public , args: ($sb, $formatProvider)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}