<?php
namespace System\Security;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StubHelpersOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Char* $value
	 * @param \System\Int32|int $length
	 */
	#[MethodOverride]public function __construct_2 ($value, $length){}
}
final class SecureString extends \System\Object implements
	\System\IDisposable
{
	use StubHelpersOverride;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Length;
	private function Initialize($value){}
	private function EnsureCapacity($capacity){}
	/**
	 * @param \System\Char $c
	 * @return \System\Void|void
	 */
	public function AppendChar($c){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @return \System\Security\SecureString
	 */
	public function Copy(){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Char $c
	 * @return \System\Void|void
	 */
	public function InsertAt($index, $c){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function IsReadOnly(){}
	/**
	 * @return \System\Void|void
	 */
	public function MakeReadOnly(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function RemoveAt($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Char $c
	 * @return \System\Void|void
	 */
	public function SetAt($index, $c){}
	private function AcquireSpan($bufferToRelease){}
	private function EnsureNotReadOnly(){}
	private function EnsureNotDisposed(){}
	/**
	 * @return \System\IntPtr
	 */
	protected function MarshalToBSTR(){}
	/**
	 * @param \System\Boolean|bool $globalAlloc
	 * @param \System\Boolean|bool $unicode
	 * @return \System\IntPtr
	 */
	protected function MarshalToString($globalAlloc, $unicode){}
	private static function GetAlignedByteSize($length){}
	private function ProtectMemory(){}
	private function UnprotectMemory(){}
	/**
	 * @uses SecureStringOverride::__construct_1 <br>public , args: ()<br>
	 * @uses SecureStringOverride::__construct_2 <br>public , args: ($value, $length)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}