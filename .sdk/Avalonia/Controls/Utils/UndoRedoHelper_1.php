<?php
namespace Avalonia\Controls\Utils;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait UndoRedoHelper_1Override {
	/**
	 * @deprecated
	 * @param \TState $state
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function UpdateLastState_1 ($state){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function UpdateLastState_2 (){}
}
class UndoRedoHelper_1 extends \System\Object
{
	use UndoRedoHelper_1Override;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const DefaultUndoLimit = '10';
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Limit;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanUndo;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanRedo;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsLastState;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasState;
	/**
	 * @return \System\Void|void
	 */
	public function Undo(){}
	/**
	 * @param \TState& &$_state
	 * @return \System\Boolean|bool
	 */
	public function TryGetLastState(&$_state){}
	/**
	 * @uses UndoRedoHelper_1Override::UpdateLastState_1 <br>public , args: ($state)<br>
	 * @uses UndoRedoHelper_1Override::UpdateLastState_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function UpdateLastState (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function DiscardRedo(){}
	/**
	 * @return \System\Void|void
	 */
	public function Redo(){}
	/**
	 * @return \System\Void|void
	 */
	public function Snapshot(){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \Avalonia\Controls\Utils\UndoRedoHelper_1+IUndoRedoHost $host [generic: TState]
	 */
	public function __construct($host){}
}