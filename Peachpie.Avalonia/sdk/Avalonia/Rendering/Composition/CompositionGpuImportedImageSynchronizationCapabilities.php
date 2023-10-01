<?php
namespace Avalonia\Rendering\Composition;
/**
 */
enum CompositionGpuImportedImageSynchronizationCapabilities implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Semaphores = 1;
	case KeyedMutex = 2;
	case Automatic = 4;
}
