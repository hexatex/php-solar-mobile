<?php

class Time
{
    public function getJulianDay()
    {
        // Todo: Need to get Julian date with fractions of a day somehow. This is not natively supported by php
        $now = new DateTime;

        // Todo: Time is relative, each AstroBody will have a time, maybe neighbors will share, maybe it will be a grid
        // of Times, idk. Also each Time instance should have an time dilation offset defining its difference from earth
        // time.
        // https://en.wikipedia.org/wiki/Time_dilation

        return gregoriantojd($now->format('m'), $now->format('d'), $now->format('Y'));
    }
}
