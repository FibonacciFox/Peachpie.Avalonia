<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait LineBreakOverride {
	/**
	 * @param \System\ReadOnlySpan_1 $rawData [generic: System\Byte]
	 */
	#[MethodOverride]public function __construct_1 ($rawData){}
	/**
	 * @param \System\IO\Stream $stream
	 */
	#[MethodOverride]public function __construct_2 ($stream){}
	/**
	 * @param \System\UInt32 $data
	 * @param \System\Int32|int $highStart
	 * @param \System\UInt32 $errorValue
	 */
	#[MethodOverride]public function __construct_3 ($data, $highStart, $errorValue){}
}
class UnicodeTrie extends \System\Object
{
	use LineBreakOverride;

	/**
	 * @param \System\IO\Stream $stream
	 * @return \System\Void|void
	 */
	protected function Save($stream){}
	/**
	 * @param \System\UInt32 $codePoint
	 * @return \System\UInt32
	 */
	public function Get($codePoint){}
	/**
	 * @uses UnicodeTrieOverride::__construct_1 <br>public , args: ($rawData)<br>
	 * @uses UnicodeTrieOverride::__construct_2 <br>public , args: ($stream)<br>
	 * @uses UnicodeTrieOverride::__construct_3 <br>public , args: ($data, $highStart, $errorValue)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}