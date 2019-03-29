<?php

namespace MyProject\AppBundle\Theme;

use MyProject\ThemeBundle\Service\ThemeService as AdaptedThemeService;

/**
 * @deprecated Use ThemeBundle's ThemeService instead!
 * Evil theme service
 */
class ThemeService
{
  	/**
     * @param AdaptedThemeService
     */
  	private $themeService;
  
	public function getTheme(int $id): Theme
    {
      	return $this->themeService->getTheme($id)->toArray();
    }
}