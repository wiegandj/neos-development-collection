<?php
namespace TYPO3\Neos\Tests\Unit\View;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "TYPO3.Neos".            *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License, either version 3 of the   *
 * License, or (at your option) any later version.                        *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * Testcase for the TypoScript View
 *
 */
class TypoScriptViewTest extends \TYPO3\Flow\Tests\UnitTestCase {

	/**
	 * @expectedException \TYPO3\Neos\Exception
	 * @test
	 */
	public function attemptToRenderWithoutNodeInformationAtAllThrowsException() {
		$view = $this->getAccessibleMock('TYPO3\Neos\View\TypoScriptView', array('dummy'));
		$view->render();
	}

	/**
	 * @expectedException \TYPO3\Neos\Exception
	 * @test
	 */
	public function attemptToRenderWithInvalidNodeInformationThrowsException() {
		$view = $this->getAccessibleMock('TYPO3\Neos\View\TypoScriptView', array('dummy'));
		$view->_set('variables', array('value' => 'foo'));
		$view->render();
	}
}

?>