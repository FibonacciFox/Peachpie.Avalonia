<?php
namespace Avalonia\Rendering\Composition;
enum CompositionGpuImportedImageSynchronizationCapabilities
{

	
	case Semaphores = '1';
	case KeyedMutex = '2';
	case Automatic = '4';

}