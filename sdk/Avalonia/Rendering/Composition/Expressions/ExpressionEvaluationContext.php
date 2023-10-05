<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 */
class ExpressionEvaluationContext extends \System\ValueType
{
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 * @property
	 */
	public $StartingValue;
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 * @property
	 */
	public $CurrentValue;
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 * @property
	 */
	public $FinalValue;
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\IExpressionObject
	 * @property
	 */
	public $Target;
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\IExpressionParameterCollection
	 * @property
	 */
	public $Parameters;
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\IExpressionForeignFunctionInterface
	 * @property
	 */
	public $ForeignFunctionInterface;
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public  function get_StartingValue(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $value
	 * @return \System\Void|void
	 */
	public  function set_StartingValue($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public  function get_CurrentValue(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $value
	 * @return \System\Void|void
	 */
	public  function set_CurrentValue($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public  function get_FinalValue(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $value
	 * @return \System\Void|void
	 */
	public  function set_FinalValue($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\IExpressionObject
	 */
	public  function get_Target(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\IExpressionObject $value
	 * @return \System\Void|void
	 */
	public  function set_Target($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\IExpressionParameterCollection
	 */
	public  function get_Parameters(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\IExpressionParameterCollection $value
	 * @return \System\Void|void
	 */
	public  function set_Parameters($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\IExpressionForeignFunctionInterface
	 */
	public  function get_ForeignFunctionInterface(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\IExpressionForeignFunctionInterface $value
	 * @return \System\Void|void
	 */
	public  function set_ForeignFunctionInterface($value){}
}
