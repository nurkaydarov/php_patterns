<?php

namespace app\dependencyInjection;

use app\AbstractFactory\product\Appt\ApptEncoder;
use app\AbstractFactory\product\Appt\BloggsApptEncoder;

class AppointmentMaker
{
    private ApptEncoder $encoder;
    public function __construct(ApptEncoder $encoder)
    {
        $this->encoder = $encoder;
    }

    public function makeAppointment()
    {
        return $this->encoder->encode();
    }
}