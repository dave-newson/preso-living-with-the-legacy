<?php

$theme = $themeService->getTheme();

$theme = $theme->toArray();

$background = $theme['background'];
$logo = $theme['logo'];
$logoUrl = $this->generateLink->image($logo);
$options = (array) $theme['options'];
if (isset($options['menu_sidebar'])) {
    $enable = Menu::SIDEBAR;
}
