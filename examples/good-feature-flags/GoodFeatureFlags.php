<?php

class MenuFactory
{
    public function create()
    {
        if (Features::isEnabled('newMenu')) {
            return new HandyDandyManu();
        } else {
            return new LegacyMenu();
        }
    }
}
