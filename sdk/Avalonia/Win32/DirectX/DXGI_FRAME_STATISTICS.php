<?php
namespace Avalonia\Win32\DirectX;
/**
 */
class DXGI_FRAME_STATISTICS extends \System\ValueType
{
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $PresentCount;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $PresentRefreshCount;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $SyncRefreshCount;
	/**
	 * @var \System\UInt64
	 * @field
	 */
	public $SyncQPCTime;
	/**
	 * @var \System\UInt64
	 * @field
	 */
	public $SyncGPUTime;
}
