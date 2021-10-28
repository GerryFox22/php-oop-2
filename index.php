<!-- 
    Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online;
    ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
    Strutturare le classi gestendo l'ereditarietà dove necessario;
    ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
    Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
    $c = new CreditCard(..); 
    $user->insertCreditCard($c);
 -->

<?php 


class Prodotto {
    protected $nome;
    protected $descrizione;
    protected $prezzo;

    public function __construct($nome, $descrizione, $prezzo)
    {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->prezzo = $prezzo;
    }

}

class Utente extends CartaDiCredito {
    protected $username;
    protected $password;
    protected $email;
    protected $carteDiCredito = [];

    public function __construct($username, $password, $email , $numeroCarta = 0, $scadenza = 0, $saldo = 0)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        parent::setCarta($numeroCarta, $scadenza, $saldo);
    }

    public function setCarta($numeroCarta,$scadenza,$saldo){
       $cartadiCredito = [
           "numero" => $numeroCarta,
           "scadenza" => $scadenza,
           "saldo" => $saldo
       ];
       
       $this->carteDiCredito .= $cartadiCredito;
    }



}

class CartaDiCredito {
    protected $numeroCarta;
    protected $scandeza;
    protected $saldo;

    public function setCarta($numeroCarta, $scadenza, $saldo)
    {
        $this->numeroCarta = $numeroCarta;
        $this->scadenza = $scadenza;
        $this->saldo = $saldo;
    }
}




$prodotto1 = new Prodotto("Videogioco", "Un bel videogioco", "30 euro");
$utente1 = new Utente('gerry','gerry94','gerry.hotmail.it');
$utente1->setCarta("222-333-444-555","20-05-2023","500 euro");
$cartaDiCredito1 = new CartaDiCredito("222-333-444-555","20-05-2023","500 euro");

    var_dump($prodotto1);
    var_dump($utente1);
    // var_dump($cartaDiCredito1);

; ?>


