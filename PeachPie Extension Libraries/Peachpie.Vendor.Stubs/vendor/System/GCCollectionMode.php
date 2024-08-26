<?php
namespace System;
enum GCCollectionMode
{
	
	case Default = '0';
	case Forced = '1';
	case Optimized = '2';
	case Aggressive = '3';

}