<?php

class Devis
{
    private string $name;
    private string $email;
    private string $phone;
    private string $message;

    public function __construct(string $name, string $email, string $phone, string $message)
    {
        $this->name    = $name;
        $this->email   = $email;
        $this->phone   = $phone;
        $this->message = $message;
    }

    public function getName(): string { return $this->name; }
    public function getEmail(): string { return $this->email; }
    public function getPhone(): string { return $this->phone; }
    public function getMessage(): string { return $this->message; }
}
