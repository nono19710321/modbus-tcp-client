<?php

namespace ModbusTcpClient\Packet;


interface IModbusPacket
{
    const READ_COILS = 1;
    const READ_INPUT_DISCRETES = 2;
    const READ_HOLDING_REGISTERS = 3;
    const READ_INPUT_REGISTERS = 4;
    const WRITE_SINGLE_COIL = 5;
    const WRITE_SINGLE_REGISTER = 6;
    const WRITE_MULTIPLE_COILS = 15;
    const WRITE_MULTIPLE_REGISTERS = 16;


    public function getHeader();
    public function getFunctionCode();
    public function getLength();

    public function __toString();
    public static function parse($binaryString);

}