<?php
namespace Avalonia\Win32\DirectX;
/**
 */
class DXGI_GAMMA_CONTROL_CAPABILITIES extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $ScaleAndOffsetSupported;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $MaxConvertedValue;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $MinConvertedValue;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $NumGammaControlPoints;
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_GAMMA_CONTROL_CAPABILITIES+<ControlPointPositions>e__FixedBuffer
	 * @field
	 */
	public $ControlPointPositions;
}
