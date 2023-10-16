<?php
namespace System\IO\Enumeration;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FileSystemEnumerator_1MethodsOverride
{
	/**
	 * @return \System\IO\Enumeration\TResult
	 */
	#[MethodOverride] public  function get_Current_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Current_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class FileSystemEnumerator_1 extends \System\Runtime\ConstrainedExecution\CriticalFinalizerObject implements 
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	/**
	 * @var \TResult
	 * @property
	 */
	public readonly $Current;
	/**
	 * @param \System\IO\Enumeration\FileSystemEntry& $entry
	 * @return \System\Boolean
	 */
	protected  function ShouldIncludeEntry($entry){}
	/**
	 * @param \System\IO\Enumeration\FileSystemEntry& $entry
	 * @return \System\Boolean
	 */
	protected  function ShouldRecurseIntoEntry($entry){}
	/**
	 * @param \System\IO\Enumeration\FileSystemEntry& $entry
	 * @return \System\IO\Enumeration\TResult
	 */
	protected  function TransformEntry($entry){}
	/**
	 * @param \System\ReadOnlySpan_1 $directory
	 * @return \System\Void|void
	 */
	protected  function OnDirectoryFinished($directory){}
	/**
	 * @param \System\Int32|int $error
	 * @return \System\Boolean
	 */
	protected  function ContinueOnError($error){}
	/**
	 * @uses FileSystemEnumerator_1MethodsOverride::get_Current_1 ()
	 * @uses FileSystemEnumerator_1MethodsOverride::get_Current_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Current(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DirectoryFinished(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @uses FileSystemEnumerator_1MethodsOverride::Dispose_1 ()
	 * @uses FileSystemEnumerator_1MethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Init(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetData(){}
	/**
	 * @param \System\ReadOnlySpan_1 $relativePath
	 * @param \System\String|string $fullPath
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateRelativeDirectoryHandle($relativePath, $fullPath){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CloseDirectoryHandle(){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Boolean $ignoreNotFound
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateDirectoryHandle($path, $ignoreNotFound){}
	/**
	 * @param \System\Int32|int $error
	 * @param \System\Boolean $ignoreNotFound
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ContinueOnDirectoryError($error, $ignoreNotFound){}
	/**
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FindNextEntry(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DequeueNextDirectory(){}
	/**
	 * @param \System\Boolean $disposing
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalDispose($disposing){}
}
