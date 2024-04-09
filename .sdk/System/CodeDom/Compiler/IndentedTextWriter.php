<?php
namespace System\CodeDom\Compiler;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait IndentedTextWriterOverride {
	/**
	 * @param \System\IO\TextWriter $writer
	 */
	#[MethodOverride]public function __construct_1 ($writer){}
	/**
	 * @param \System\IO\TextWriter $writer
	 * @param \System\String|string $tabString
	 */
	#[MethodOverride]public function __construct_2 ($writer, $tabString){}
}
class IndentedTextWriter extends \System\IO\TextWriter implements
	\System\IDisposable,
	\System\IAsyncDisposable
{
	use IndentedTextWriterOverride;
	/**
	 * @field
	 * @var \System\String|string
	 */
	const DefaultTabString = '    ';
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
	 * @var \System\String|string
	 */
	public $NewLine;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Indent;
	/**
	 * @property
	 * @var \System\IO\TextWriter
	 * @since readonly
	 */
	public $InnerWriter;
	/**
	 * @property
	 * @var \System\IFormatProvider
	 * @since readonly
	 */
	public $FormatProvider;
	/**
	 * @return \System\Void|void
	 */
	protected function OutputTabs(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	protected function OutputTabsAsync(){}
	/**
	 * @param \System\String|string $s
	 * @return \System\Void|void
	 */
	public function WriteLineNoTabs($s){}
	/**
	 * @param \System\String|string $s
	 * @return \System\Threading\Tasks\Task
	 */
	public function WriteLineNoTabsAsync($s){}
	/**
	 * @uses IndentedTextWriterOverride::__construct_1 <br>public , args: ($writer)<br>
	 * @uses IndentedTextWriterOverride::__construct_2 <br>public , args: ($writer, $tabString)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}