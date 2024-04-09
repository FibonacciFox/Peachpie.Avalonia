<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TextReaderOverride {
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
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Read_1 (){}
	/**
	 * @deprecated
	 * @param \System\Char $buffer
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Read_2 ($buffer, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $buffer [generic: System\Char]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Read_3 ($buffer){}
	/**
	 * @deprecated
	 * @param \System\Char $buffer
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function ReadBlock_1 ($buffer, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $buffer [generic: System\Char]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function ReadBlock_2 ($buffer){}
	/**
	 * @deprecated
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ReadLineAsync_1 (){}
	/**
	 * @deprecated
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride]public function ReadLineAsync_2 ($cancellationToken){}
	/**
	 * @deprecated
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ReadToEndAsync_1 (){}
	/**
	 * @deprecated
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ReadToEndAsync_2 ($cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Char $buffer
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ReadAsync_1 ($buffer, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\Memory_1 $buffer [generic: System\Char]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride]public function ReadAsync_2 ($buffer, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Char $buffer
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ReadBlockAsync_1 ($buffer, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\Memory_1 $buffer [generic: System\Char]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride]public function ReadBlockAsync_2 ($buffer, $cancellationToken){}
}
class TextReader extends \System\MarshalByRefObject implements
	\System\IDisposable
{
	use TextReaderOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\IO\TextReader
	 */
	public static $Null;
	/**
	 * @return \System\Void|void
	 */
	public function Close(){}
	/**
	 * @uses TextReaderOverride::Dispose_1 <br>public , args: ()<br>
	 * @uses TextReaderOverride::Dispose_2 <br>protected , args: ($disposing)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public function Peek(){}
	/**
	 * @uses TextReaderOverride::Read_1 <br>public , args: ()<br>
	 * @uses TextReaderOverride::Read_2 <br>public , args: ($buffer, $index, $count)<br>
	 * @uses TextReaderOverride::Read_3 <br>public , args: ($buffer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Read (\override ...$args){}
	/**
	 * @return \System\String|string
	 */
	public function ReadToEnd(){}
	/**
	 * @uses TextReaderOverride::ReadBlock_1 <br>public , args: ($buffer, $index, $count)<br>
	 * @uses TextReaderOverride::ReadBlock_2 <br>public , args: ($buffer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function ReadBlock (\override ...$args){}
	/**
	 * @return \System\String|string
	 */
	public function ReadLine(){}
	/**
	 * @uses TextReaderOverride::ReadLineAsync_1 <br>public , args: ()<br>
	 * @uses TextReaderOverride::ReadLineAsync_2 <br>public , args: ($cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task_1|\System\Threading\Tasks\ValueTask_1|mixed|\override
	 */
	#[MethodOverridePublic]function ReadLineAsync (\override ...$args){}
	private function ReadLineCoreAsync($cancellationToken){}
	/**
	 * @uses TextReaderOverride::ReadToEndAsync_1 <br>public , args: ()<br>
	 * @uses TextReaderOverride::ReadToEndAsync_2 <br>public , args: ($cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function ReadToEndAsync (\override ...$args){}
	/**
	 * @uses TextReaderOverride::ReadAsync_1 <br>public , args: ($buffer, $index, $count)<br>
	 * @uses TextReaderOverride::ReadAsync_2 <br>public , args: ($buffer, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task_1|\System\Threading\Tasks\ValueTask_1|mixed|\override
	 */
	#[MethodOverridePublic]function ReadAsync (\override ...$args){}
	/**
	 * @param \System\Memory_1 $buffer [generic: System\Char]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1[System\Int32]
	 */
	protected function ReadAsyncInternal($buffer, $cancellationToken){}
	/**
	 * @uses TextReaderOverride::ReadBlockAsync_1 <br>public , args: ($buffer, $index, $count)<br>
	 * @uses TextReaderOverride::ReadBlockAsync_2 <br>public , args: ($buffer, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task_1|\System\Threading\Tasks\ValueTask_1|mixed|\override
	 */
	#[MethodOverridePublic]function ReadBlockAsync (\override ...$args){}
	/**
	 * @param \System\Memory_1 $buffer [generic: System\Char]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1[System\Int32]
	 */
	protected function ReadBlockAsyncInternal($buffer, $cancellationToken){}
	/**
	 * @param \System\IO\TextReader $reader
	 * @return \System\IO\TextReader
	 */
	public static function Synchronized($reader){}
}