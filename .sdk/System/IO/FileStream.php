<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FileStreamOverride {
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\IO\FileAccess $access
	 * @param \System\Int32|int $bufferSize
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function ValidateHandle_1 ($handle, $access, $bufferSize){}
	/**
	 * @deprecated
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\IO\FileAccess $access
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Boolean|bool $isAsync
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function ValidateHandle_2 ($handle, $access, $bufferSize, $isAsync){}
	/**
	 * @deprecated
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]protected function BaseReadAsync_1 ($buffer, $offset, $count, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Memory_1 $buffer [generic: System\Byte]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride]protected function BaseReadAsync_2 ($buffer, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]protected function BaseWriteAsync_1 ($buffer, $offset, $count, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlyMemory_1 $buffer [generic: System\Byte]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask
	 */
	#[MethodOverride]protected function BaseWriteAsync_2 ($buffer, $cancellationToken){}
	/**
	 * @param \System\IntPtr $handle
	 * @param \System\IO\FileAccess $access
	 */
	#[MethodOverride]public function __construct_1 ($handle, $access){}
	/**
	 * @param \System\IntPtr $handle
	 * @param \System\IO\FileAccess $access
	 * @param \System\Boolean|bool $ownsHandle
	 */
	#[MethodOverride]public function __construct_2 ($handle, $access, $ownsHandle){}
	/**
	 * @param \System\IntPtr $handle
	 * @param \System\IO\FileAccess $access
	 * @param \System\Boolean|bool $ownsHandle
	 * @param \System\Int32|int $bufferSize
	 */
	#[MethodOverride]public function __construct_3 ($handle, $access, $ownsHandle, $bufferSize){}
	/**
	 * @param \System\IntPtr $handle
	 * @param \System\IO\FileAccess $access
	 * @param \System\Boolean|bool $ownsHandle
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Boolean|bool $isAsync
	 */
	#[MethodOverride]public function __construct_4 ($handle, $access, $ownsHandle, $bufferSize, $isAsync){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\IO\FileAccess $access
	 */
	#[MethodOverride]public function __construct_5 ($handle, $access){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\IO\FileAccess $access
	 * @param \System\Int32|int $bufferSize
	 */
	#[MethodOverride]public function __construct_6 ($handle, $access, $bufferSize){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeFileHandle $handle
	 * @param \System\IO\FileAccess $access
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Boolean|bool $isAsync
	 */
	#[MethodOverride]public function __construct_7 ($handle, $access, $bufferSize, $isAsync){}
	/**
	 * @param \System\String|string $path
	 * @param \System\IO\FileMode $mode
	 */
	#[MethodOverride]public function __construct_8 ($path, $mode){}
	/**
	 * @param \System\String|string $path
	 * @param \System\IO\FileMode $mode
	 * @param \System\IO\FileAccess $access
	 */
	#[MethodOverride]public function __construct_9 ($path, $mode, $access){}
	/**
	 * @param \System\String|string $path
	 * @param \System\IO\FileMode $mode
	 * @param \System\IO\FileAccess $access
	 * @param \System\IO\FileShare $share
	 */
	#[MethodOverride]public function __construct_10 ($path, $mode, $access, $share){}
	/**
	 * @param \System\String|string $path
	 * @param \System\IO\FileMode $mode
	 * @param \System\IO\FileAccess $access
	 * @param \System\IO\FileShare $share
	 * @param \System\Int32|int $bufferSize
	 */
	#[MethodOverride]public function __construct_11 ($path, $mode, $access, $share, $bufferSize){}
	/**
	 * @param \System\String|string $path
	 * @param \System\IO\FileMode $mode
	 * @param \System\IO\FileAccess $access
	 * @param \System\IO\FileShare $share
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Boolean|bool $useAsync
	 */
	#[MethodOverride]public function __construct_12 ($path, $mode, $access, $share, $bufferSize, $useAsync){}
	/**
	 * @param \System\String|string $path
	 * @param \System\IO\FileMode $mode
	 * @param \System\IO\FileAccess $access
	 * @param \System\IO\FileShare $share
	 * @param \System\Int32|int $bufferSize
	 * @param \System\IO\FileOptions $options
	 */
	#[MethodOverride]public function __construct_13 ($path, $mode, $access, $share, $bufferSize, $options){}
	/**
	 * @param \System\String|string $path
	 * @param \System\IO\FileStreamOptions $options
	 */
	#[MethodOverride]public function __construct_14 ($path, $options){}
}
class FileStream extends \System\IO\Stream implements
	\System\IDisposable,
	\System\IAsyncDisposable
{
	use FileStreamOverride;

	/**
	 * @field
	 * @var \System\Threading\SemaphoreSlim
	 */
	protected $_asyncActiveSemaphore;
	/**
	 * @property
	 * @var \System\IntPtr
	 * @since readonly
	 */
	public $Handle;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanRead;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanWrite;
	/**
	 * @property
	 * @var \Microsoft\Win32\SafeHandles\SafeFileHandle
	 * @since readonly
	 */
	public $SafeFileHandle;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAsync;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\Int64|int
	 */
	public $Position;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanSeek;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanTimeout;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $ReadTimeout;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $WriteTimeout;
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses FileStreamOverride::ValidateHandle_1 <br>private , args: ($handle, $access, $bufferSize)<br>
	 * @uses FileStreamOverride::ValidateHandle_2 <br>private , args: ($handle, $access, $bufferSize, $isAsync)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function ValidateHandle (\override ...$args){}
	/**
	 * @param \System\Int64|int $position
	 * @param \System\Int64|int $length
	 * @return \System\Void|void
	 */
	public function Lock($position, $length){}
	/**
	 * @param \System\Int64|int $position
	 * @param \System\Int64|int $length
	 * @return \System\Void|void
	 */
	public function Unlock($position, $length){}
	private function ValidateReadWriteArgs($buffer, $offset, $count){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	protected function BaseFlushAsync($cancellationToken){}
	/**
	 * @param \System\Span_1 $buffer [generic: System\Byte]
	 * @return \System\Int32|int
	 */
	protected function BaseRead($buffer){}
	/**
	 * @uses FileStreamOverride::BaseReadAsync_1 <br>protected , args: ($buffer, $offset, $count, $cancellationToken)<br>
	 * @uses FileStreamOverride::BaseReadAsync_2 <br>protected , args: ($buffer, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task_1|\System\Threading\Tasks\ValueTask_1|mixed|\override
	 */
	#[MethodOverrideProtected]function BaseReadAsync (\override ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $buffer [generic: System\Byte]
	 * @return \System\Void|void
	 */
	protected function BaseWrite($buffer){}
	/**
	 * @uses FileStreamOverride::BaseWriteAsync_1 <br>protected , args: ($buffer, $offset, $count, $cancellationToken)<br>
	 * @uses FileStreamOverride::BaseWriteAsync_2 <br>protected , args: ($buffer, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|\System\Threading\Tasks\ValueTask|mixed|\override
	 */
	#[MethodOverrideProtected]function BaseWriteAsync (\override ...$args){}
	/**
	 * @param \System\IO\Stream $destination
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	protected function BaseCopyToAsync($destination, $bufferSize, $cancellationToken){}
	/**
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $state
	 * @return \System\IAsyncResult
	 */
	protected function BaseBeginRead($buffer, $offset, $count, $callback, $state){}
	/**
	 * @param \System\IAsyncResult $asyncResult
	 * @return \System\Int32|int
	 */
	protected function BaseEndRead($asyncResult){}
	/**
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $state
	 * @return \System\IAsyncResult
	 */
	protected function BaseBeginWrite($buffer, $offset, $count, $callback, $state){}
	/**
	 * @param \System\IAsyncResult $asyncResult
	 * @return \System\Void|void
	 */
	protected function BaseEndWrite($asyncResult){}
	/**
	 * @uses FileStreamOverride::__construct_1 <br>public , args: ($handle, $access)<br>
	 * @uses FileStreamOverride::__construct_2 <br>public , args: ($handle, $access, $ownsHandle)<br>
	 * @uses FileStreamOverride::__construct_3 <br>public , args: ($handle, $access, $ownsHandle, $bufferSize)<br>
	 * @uses FileStreamOverride::__construct_4 <br>public , args: ($handle, $access, $ownsHandle, $bufferSize, $isAsync)<br>
	 * @uses FileStreamOverride::__construct_5 <br>public , args: ($handle, $access)<br>
	 * @uses FileStreamOverride::__construct_6 <br>public , args: ($handle, $access, $bufferSize)<br>
	 * @uses FileStreamOverride::__construct_7 <br>public , args: ($handle, $access, $bufferSize, $isAsync)<br>
	 * @uses FileStreamOverride::__construct_8 <br>public , args: ($path, $mode)<br>
	 * @uses FileStreamOverride::__construct_9 <br>public , args: ($path, $mode, $access)<br>
	 * @uses FileStreamOverride::__construct_10 <br>public , args: ($path, $mode, $access, $share)<br>
	 * @uses FileStreamOverride::__construct_11 <br>public , args: ($path, $mode, $access, $share, $bufferSize)<br>
	 * @uses FileStreamOverride::__construct_12 <br>public , args: ($path, $mode, $access, $share, $bufferSize, $useAsync)<br>
	 * @uses FileStreamOverride::__construct_13 <br>public , args: ($path, $mode, $access, $share, $bufferSize, $options)<br>
	 * @uses FileStreamOverride::__construct_14 <br>public , args: ($path, $options)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}