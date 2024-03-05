<?php

class CalendarPage extends Page 
{
    public function currentDate()
    {   
        $today = date('Y-m-d');
        return $today;
    }
}