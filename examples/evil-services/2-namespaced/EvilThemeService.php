<?php

namespace MyProject\AppBundle\Theme;

/**
 * Evil theme service
 */
interface ThemeService
{
	public function getTheme(int $id): array;

  	public function getThemes(): array;

  	public function setThemeValue(int $id, string $key, $value): void;
}