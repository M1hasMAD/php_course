<?php
interface Sports
{
    public function hockey();
    public function basketball();
    public function football();
}

class User implements Sports
{
    public function hockey()
    {
        echo "I'm playing hockey";
    }
    public function basketball()
    {
        echo "I'm playing basketball";
    }
    public function football()
    {
        echo "I'm playing football";
    }
}