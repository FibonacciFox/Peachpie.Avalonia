<?php
namespace Avalonia\Controls\Utils;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait UndoRedoHelper_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function UpdateLastState_1($state){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function UpdateLastState_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class UndoRedoHelper_1 extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $DefaultUndoLimit;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Limit;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanUndo;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanRedo;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsLastState;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasState;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Limit(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Limit($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanUndo(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanRedo(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Undo(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsLastState(){}
	/**
	 * @param \Avalonia\Controls\Utils\TState& $_state
	 * @return \System\Boolean
	 */
	public  function TryGetLastState($_state){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasState(){}
	/**
	 * @uses UndoRedoHelper_1MethodsOverride::UpdateLastState_1 ($state)
	 * @uses UndoRedoHelper_1MethodsOverride::UpdateLastState_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function UpdateLastState(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function DiscardRedo(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Redo(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Snapshot(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
