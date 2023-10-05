<?php
namespace Avalonia\X11;
/**
 */
class TransparencyHelper extends \System\Object implements 
	\System\IDisposable,
	\Avalonia\X11\IGlobalsSubscriber
{
	/**
	 * @var \System\Action_1[Avalonia\Controls\WindowTransparencyLevel]
	 * @property
	 */
	public $TransparencyLevelChanged;
	/**
	 * @var \Avalonia\Controls\WindowTransparencyLevel
	 * @property
	 */
	public $CurrentLevel;
	/**
	 * @return \System\Action_1
	 */
	public  function get_TransparencyLevelChanged(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_TransparencyLevelChanged($value){}
	/**
	 * @return \Avalonia\Controls\WindowTransparencyLevel
	 */
	public  function get_CurrentLevel(){}
	/**
	 * @param \Avalonia\Controls\WindowTransparencyLevel $value
	 * @return \System\Void|void
	 */
	public  function set_CurrentLevel($value){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $levels
	 * @return \System\Void|void
	 */
	public  function SetTransparencyRequest($levels){}
	/**
	 * @param \Avalonia\Controls\WindowTransparencyLevel $level
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsSupported($level){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateTransparency(){}
	/**
	 * @param \System\Boolean $blur
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetBlur($blur){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\String|string $wmName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WmChanged($wmName){}
	/**
	 * @param \System\Boolean $compositing
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CompositionChanged($compositing){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
