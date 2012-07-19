<?php
/**
 *  CakePHP HighCharts Plugin
 * 
 * 	Copyright (C) 2012 Kurn La Montagne / destinydriven
 *	<https://github.com/destinydriven> 
 * 
 * 	Multi-licensed under:
 * 		MPL <http://www.mozilla.org/MPL/MPL-1.1.html>
 * 		LGPL <http://www.gnu.org/licenses/lgpl.html>
 * 		GPL <http://www.gnu.org/licenses/gpl.html>
 */

class HighChartsAppController extends AppController
{
//	var $components = array('DebugKit.Toolbar');
  public function beforeFilter()
  {
  	parent::beforeFilter();	  	
  	$this->layout = 'HighCharts.chart.demo';
  }

}
