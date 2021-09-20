<?php

class Uzivatel
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $prezdivka;

    /** @var string */
    protected $hashHesla;

    /** @var string */
    protected $email;

    /** @var bool */
    protected $administrator;



    public function __construct(int $id, string $prezdivka, string $hashHesla, string $email, int $administrator)
    {
        $this->id = $id;
        $this->prezdivka = $prezdivka;
        $this->hashHesla = $hashHesla;
        $this->email = $email;
        $this->administrator = $administrator ? true : false;
    }



    public function vratId(): string
    {
        return $this->id;
    }



    public function vratPrezdivku(): string
    {
        return htmlspecialchars($this->prezdivka, ENT_NOQUOTES);
    }



    public function vratEmail(): string
    {
        return htmlspecialchars($this->email, ENT_NOQUOTES);
    }



    public function jeAdministrator(): bool
    {
        return $this->administrator;
    }


    
    public function overHeslo($heslo): bool
    {
        if (password_verify($heslo, $this->hashHesla)) {
            return true;
        } else {
            return false;
        }
    }
    
}
