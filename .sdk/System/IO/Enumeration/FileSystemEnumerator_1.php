<?php
namespace System\IO\Enumeration;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FileSystemEnumerator_1Override {
	/**
	 * @deprecated
	 * @return \TResult
	 */
	#[MethodOverride]public function get_Current_1 (){}
	/**
	 * @deprecated
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function get_Current_2 (){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Dispose_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $disposing
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Dispose_2 ($disposing){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function FindNextEntry_1 (){}
	/**
	 * @deprecated
	 * @param \System\Byte* $entryBufferPtr
	 * @param \System\Int32|int $bufferLength
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function FindNextEntry_2 ($entryBufferPtr, $bufferLength){}
}
class FileSystemEnumerator_1 extends \System\Runtime\ConstrainedExecution\CriticalFinalizerObject implements
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	use FileSystemEnumerator_1Override;
	/**
	 * @property
	 * @var \TResult
	 * @since readonly
	 */
	public $Current;
	/**
	 * @param \System\IO\Enumeration\FileSystemEntry& $entry
	 * @return \System\Boolean|bool
	 */
	protected function ShouldIncludeEntry($entry){}
	/**
	 * @param \System\IO\Enumeration\FileSystemEntry& $entry
	 * @return \System\Boolean|bool
	 */
	protected function ShouldRecurseIntoEntry($entry){}
	/**
	 * @param \System\IO\Enumeration\FileSystemEntry& $entry
	 * @return \TResult
	 */
	abstract protected function TransformEntry($entry);
	/**
	 * @param \System\ReadOnlySpan_1 $directory [generic: System\Char]
	 * @return \System\Void|void
	 */
	protected function OnDirectoryFinished($directory){}
	/**
	 * @param \System\Int32|int $error
	 * @return \System\Boolean|bool
	 */
	protected function ContinueOnError($error){}
	/**
	 * @uses FileSystemEnumerator_1Override::get_Current_1 <br>public , args: ()<br>
	 * @uses FileSystemEnumerator_1Override::get_Current_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \TResult|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_Current (){}
	private function DirectoryFinished(){}
	/**
	 * @return \System\Void|void
	 */
	public function Reset(){}
	/**
	 * @uses FileSystemEnumerator_1Override::Dispose_1 <br>public , args: ()<br>
	 * @uses FileSystemEnumerator_1Override::Dispose_2 <br>protected , args: ($disposing)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	private function Init(){}
	private function InternalContinueOnError($info, $ignoreNotFound){}
	private static function IsDirectoryNotFound($info){}
	private static function IsAccessError($info){}
	private function CreateDirectoryHandle($path, $ignoreNotFound){}
	private function CloseDirectoryHandle(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses FileSystemEnumerator_1Override::FindNextEntry_1 <br>private , args: ()<br>
	 * @uses FileSystemEnumerator_1Override::FindNextEntry_2 <br>private , args: ($entryBufferPtr, $bufferLength)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function FindNextEntry (\override ...$args){}
	private function DequeueNextDirectory(){}
	private function InternalDispose($disposing){}
	/**
	 * @param \System\String|string $directory
	 * @param \System\IO\EnumerationOptions $options
	 */
	public function __construct($directory, $options){}
}