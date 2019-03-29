<?php

/**
 * Good theme service
 */
interface ThemeService
{
	public function getTheme(int $id): Theme;

    /**
     * @return Theme[]
     */
  	public function getThemes(): array;
  
  	public function saveTheme(Theme $theme): void;
}