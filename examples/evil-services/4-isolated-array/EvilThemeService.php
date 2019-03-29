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
  
	public function getTheme(int $id): array
    {
      	return $this->themeToArray($this->themeService->getTheme($id));
    }
    
    private function themeToArray(Theme $theme): array
    {
        return [
            'x' => $theme->getThing(),
            'y' => $theme->getAnotherThing()
        ];
    }
}