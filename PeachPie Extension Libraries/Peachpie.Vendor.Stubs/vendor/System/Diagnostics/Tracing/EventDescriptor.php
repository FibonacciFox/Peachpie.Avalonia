<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EventDescriptorOverride {
	/**
	 * @param \System\Int32|int $traceloggingId
	 * @param \System\Byte $level
	 * @param \System\Byte $opcode
	 * @param \System\Int64|int $keywords
	 */
	#[MethodOverride]public function __construct_1 ($traceloggingId, $level, $opcode, $keywords){}
	/**
	 * @param \System\Int32|int $id
	 * @param \System\Byte $version
	 * @param \System\Byte $channel
	 * @param \System\Byte $level
	 * @param \System\Byte $opcode
	 * @param \System\Int32|int $task
	 * @param \System\Int64|int $keywords
	 */
	#[MethodOverride]public function __construct_2 ($id, $version, $channel, $level, $opcode, $task, $keywords){}
}
final class EventDescriptor extends \System\ValueType implements
	\System\IEquatable_1
{
	use EventDescriptorOverride;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $EventId;
	/**
	 * @property
	 * @var \System\Byte
	 * @since readonly
	 */
	public $Version;
	/**
	 * @property
	 * @var \System\Byte
	 * @since readonly
	 */
	public $Channel;
	/**
	 * @property
	 * @var \System\Byte
	 * @since readonly
	 */
	public $Level;
	/**
	 * @property
	 * @var \System\Byte
	 * @since readonly
	 */
	public $Opcode;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Task;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $Keywords;
	/**
	 * @uses EventDescriptorOverride::__construct_1 <br>public , args: ($traceloggingId, $level, $opcode, $keywords)<br>
	 * @uses EventDescriptorOverride::__construct_2 <br>public , args: ($id, $version, $channel, $level, $opcode, $task, $keywords)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}