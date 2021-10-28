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

class Videogioco extends Prodotto {
    protected $tipologia;
    protected $valutazione;
    protected $gamingHouse;
    
    public function __construct($nome, $descrizione, $prezzo, $tipologia, $valutazione, $gamingHouse)
    {
        $this->tipologia = $tipologia;
        $this->valutazione = $valutazione;
        $this->gamingHouse = $gamingHouse;
        parent::__construct($nome, $descrizione, $prezzo);
    }
}

class Utente {
    protected $username;
    protected $password;
    protected $email;
    protected $carteDiCredito = [];

    public function __construct($username, $password, $email){
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
     
    }

    public function aggiugniCarta($carta){
      
       array_push($this->carteDiCredito,$carta );
    }

   
}

class UtentePremium extends Utente {
    protected $sconto;

    public function __construct($username, $password, $email, $sconto = 15)
    {
        $this->sconto = $sconto;
        parent::__construct($username, $password, $email); 
    }


}

class CartaDiCredito {
    protected $numeroCarta;
    protected $scandenza;
    protected $saldo;

    public function __construct($numeroCarta, $scandenza, $saldo)
    {
        $this->numeroCarta = $numeroCarta;
        $this->scandenza = $scandenza;
        $this->saldo = $saldo;
    }
}




// $prodotto1 = new Prodotto("Videogioco", "Un bel videogioco", "30 euro");
// $utente1 = new Utente('gerry','gerry94','gerry@hotmail.it');
// $utente2 = new Utente('luca','luca97','luca@hotmail.it');
// $utente3 = new UtentePremium("Gerry","evviva","email");
// $carta1 = new CartaDiCredito("222-333-444-555","20-05-2023",500);
// $carta2 = new CartaDiCredito("111-333-777-888","12-08-2025",800);

// $utente1->aggiugniCarta($carta1);
// $utente1->aggiugniCarta($carta2);


    
// var_dump($utente3);
//     var_dump($utente1);
//     var_dump($carta1);


; ?>


